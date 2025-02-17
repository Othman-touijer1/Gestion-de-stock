<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Facture;
use App\Models\Produit;
use App\Models\ProduitDepot;
use App\Models\Client;
use App\Models\LignFacture;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use PDF;


class FactureController extends Controller
{

    public function index()
    {
        // Chargez les factures avec leurs lignes et produits
        $factures = Facture::with('lignfactures.produit')->get(); // Utilisez le nom correct de la relation
        
        $produits = Produit::with(['depots', 'facture'])->get();
        $clients = Client::all();
        
        // Ne réinitialisez pas $factures ici!
        // $factures = Facture::all(); <- SUPPRIMEZ CETTE LIGNE
        
        return view('factures.index', compact('factures', 'produits', 'clients'));
    }
    
    
    public function create()
    {
        $produits = Produit::all();
        $clients = Client::all();
        $produitsDepots = ProduitDepot::with(['produit', 'depot'])->get();
        return view('Factures.create', compact('produits', 'produitsDepots', 'clients'));
    }
    
    public function store(Request $request)
    {
        // Validation des données
        $request->validate([
            'numero_facture' => 'required|unique:factures',
            'date_facture' => 'required|date',
            'societe' => 'required',
            'adresse' => 'required',
            'telephone' => 'required',
            'adresse_client' => 'required',
            'client' => 'required',
            'lignes' => 'required|array|min:1',
            'lignes.*.designation' => 'required|string',
            'lignes.*.produit_id' => 'required|exists:produits,id',
            'lignes.*.prix_ht' => 'required|numeric',
            'lignes.*.quantite' => 'required|integer',
            'lignes.*.tva' => 'required|numeric',
            'lignes.*.remise' => 'nullable|numeric',
        ]);
    
        // Créer la facture
        $facture = Facture::create([
            'numero_facture' => $request->numero_facture,
            'date_facture' => $request->date_facture,
            'societe' => $request->societe,
            'adresse' => $request->adresse,
            'telephone' => $request->telephone,
            'adresse_client' => $request->adresse_client,
            'client' => $request->client,
            'total_ht' => 0,
            'total_tva' => 0,
            'total_ttc' => 0,
        ]);
    
        // Ajouter les lignes de facture
        foreach ($request->lignes as $ligne_data) {
            $prix_ht = $ligne_data['prix_ht'];
            $quantite = $ligne_data['quantite'];
            $tva = $ligne_data['tva'];
            $remise = $ligne_data['remise'] ?? 0;
    
            $total_ht_ligne = $prix_ht * $quantite;
            $total_ttc_ligne = $total_ht_ligne + ($total_ht_ligne * ($tva / 100)) - ($total_ht_ligne * ($remise / 100));
    
            LignFacture::create([
                'facture_id' => $facture->id,
                'designation' => $ligne_data['designation'],
                'produit_id' => $ligne_data['produit_id'], // Use produit_id instead of produit
                'prix_ht' => $prix_ht,
                'quantite' => $quantite,
                'tva' => $tva,
                'remise' => $remise,
                'total_ht' => $total_ht_ligne,
                'total_ttc' => $total_ttc_ligne,
            ]);
    
            // Mise à jour des totaux de la facture
            $facture->total_ht += $total_ht_ligne;
            $facture->total_tva += $total_ht_ligne * ($tva / 100);
            $facture->total_ttc += $total_ttc_ligne;
        }
    
        // Sauvegarder les totaux de la facture
        $facture->save();
    
        return redirect()->route('factures.index')->with('success', 'Facture créée avec succès');
    }
    public function edit(Facture $facture)
    {
        // Load the invoice lines
        $lignes = $facture->lignFactures->map(function($ligne) {
            return [
                'id' => $ligne->id,
                'designation' => $ligne->designation,
                'produit_id' => $ligne->produit_id,
                'prix_ht' => $ligne->prix_ht,
                'quantite' => $ligne->quantite,
                'tva' => $ligne->tva,
                'remise' => $ligne->remise,
                'total_ht' => $ligne->total_ht,
                'total_ttc' => $ligne->total_ttc,
            ];
        });
        
        return response()->json([
            'facture' => $facture,
            'lignes' => $lignes
        ]);
    }

    // Update method - updates the invoice
    public function update(Request $request, Facture $facture)
    {
        // Validation des données
        $request->validate([
            'numero_facture' => 'required|unique:factures,numero_facture,' . $facture->id,
            'date_facture' => 'required|date',
            'societe' => 'required',
            'adresse' => 'required',
            'telephone' => 'required',
            'adresse_client' => 'required',
            'client' => 'required',
            'lignes' => 'required|array|min:1',
            'lignes.*.designation' => 'required|string',
            'lignes.*.produit_id' => 'required|exists:produits,id',
            'lignes.*.prix_ht' => 'required|numeric',
            'lignes.*.quantite' => 'required|integer',
            'lignes.*.tva' => 'required|numeric',
            'lignes.*.remise' => 'nullable|numeric',
        ]);
        
        // Mettre à jour la facture
        $facture->update([
            'numero_facture' => $request->numero_facture,
            'date_facture' => $request->date_facture,
            'societe' => $request->societe,
            'adresse' => $request->adresse,
            'telephone' => $request->telephone,
            'adresse_client' => $request->adresse_client,
            'client' => $request->client,
            'total_ht' => 0,
            'total_tva' => 0,
            'total_ttc' => 0,
        ]);
        
        // Supprimer les anciennes lignes
        $facture->lignFactures()->delete();
        
        // Ajouter les nouvelles lignes
        foreach ($request->lignes as $ligne_data) {
            $prix_ht = $ligne_data['prix_ht'];
            $quantite = $ligne_data['quantite'];
            $tva = $ligne_data['tva'];
            $remise = $ligne_data['remise'] ?? 0;
            
            $total_ht_ligne = $prix_ht * $quantite;
            $montant_remise = $total_ht_ligne * ($remise / 100);
            $montant_tva = ($total_ht_ligne - $montant_remise) * ($tva / 100);
            $total_ttc_ligne = $total_ht_ligne + $montant_tva - $montant_remise;
            
            LignFacture::create([
                'facture_id' => $facture->id,
                'designation' => $ligne_data['designation'],
                'produit_id' => $ligne_data['produit_id'],
                'prix_ht' => $prix_ht,
                'quantite' => $quantite,
                'tva' => $tva,
                'remise' => $remise,
                'total_ht' => $total_ht_ligne,
                'total_ttc' => $total_ttc_ligne,
            ]);
            
            // Mise à jour des totaux de la facture
            $facture->total_ht += $total_ht_ligne;
            $facture->total_tva += $montant_tva;
            $facture->total_ttc += $total_ttc_ligne;
        }
        
        // Sauvegarder les totaux de la facture
        $facture->save();
        
        return redirect()->route('factures.index')->with('success', 'Facture mise à jour avec succès');
    }
    public function destroy(Facture $facture)
    {
        // Supprimer les lignes de facture
        $facture->lignFactures()->delete();
        
        // Supprimer la facture
        $facture->delete();
        
        return redirect()->route('factures.index')->with('success', 'Facture supprimée avec succès');
    }

    // PDF view method
    public function generatePDF(Facture $facture)
    {
        // Chargez les lignes de facture
        $lignes = $facture->lignFactures;
        
        // Générez le PDF en utilisant la vue
        $pdf = PDF::loadView('factures.pdf', [
            'facture' => $facture,
            'lignes' => $lignes
        ]);
        
        // Téléchargez le PDF
        return $pdf->download('facture-' . $facture->numero_facture . '.pdf');
        
        // Alternativement, si vous voulez afficher le PDF dans le navigateur:
        // return $pdf->stream('facture-' . $facture->numero_facture . '.pdf');
    }
    
}