<?php

namespace App\Http\Controllers;

use App\Models\ProduitDepot;
use App\Models\Produit;
use App\Models\Depot;
use App\Models\user;
use App\Models\Historique;
use Illuminate\Http\Request;

class ProduitDepotController extends Controller
{
    
    public function create()
    {
        $produits = Produit::all();
        $depots = Depot::all();
        $produitsDepots = ProduitDepot::with(['produit', 'depot'])->get();
        
        return view('DepotProduit.createDP', compact('produits', 'depots', 'produitsDepots'));
    }
    
    public function store(Request $request) {
        $request->validate([
            'produit_id' => 'required|exists:produits,id',
            'depot_id' => 'required|exists:depots,id',
            'quantite' => 'required|numeric|min:1',
            'type' => 'required|in:addition,soustraction'
        ]);
    
        
        $produitDepot = ProduitDepot::where([
            'produit_id' => $request->produit_id,
            'depot_id' => $request->depot_id
        ])->first();
    
        if ($produitDepot) {
           
            if ($request->type == 'soustraction') {
                if ($produitDepot->quantite < $request->quantite) {
                    return redirect()->back()->with('error', 'Quantité insuffisante en stock!');
                }
                $produitDepot->quantite -= $request->quantite;
            } else {
                $produitDepot->quantite += $request->quantite;
            }
            $produitDepot->save();

            Historique::create([
                'produit_id' => $request->produit_id,
                'depot_id' => $request->depot_id,
                'user_id' => auth()->user()->id,
                'quantite' => $request->quantite,
                'type' => $request->type,
            ]);
    
            return redirect()->back()->with('success', 'Quantité mise à jour avec succès!');
        } else {
            if ($request->type == 'soustraction') {
                return redirect()->back()->with('error', 'Impossible de faire une soustraction pour un nouveau produit. Veuillez d\'abord ajouter le produit au dépôt.');
            }
    
          
            ProduitDepot::create([
                'produit_id' => $request->produit_id,
                'depot_id' => $request->depot_id,
                'quantite' => $request->quantite,
                'type' => $request->type,
                'user_id' => auth()->user()->id,
            ]);
    
            
            Historique::create([
                'produit_id' => $request->produit_id,
                'depot_id' => $request->depot_id,
                'user_id' => auth()->user()->id,
                'quantite' => $request->quantite,
                'type' => $request->type,
            ]);
            return redirect()->back()->with('success', 'Produit ajouté au dépôt avec succès!');
        }
    }
    


    public function update(Request $request)
    {
        $request->validate([
            'produit_id' => 'required|exists:produits,id',
            'depot_id' => 'required|exists:depots,id',
            'quantite' => 'required|numeric|min:1',
            'type' => 'required|in:addition,soustraction'
        ]);

        ProduitDepot::where([
            'produit_id' => $request->produit_id,
            'depot_id' => $request->depot_id
        ])->update([
            'quantite' => $request->quantite,
            'type' => $request->type,
            'user_id' => auth()->user()->id
        ]);

        return redirect()->back()->with('success', 'Produit modifié avec succès!');
    }
    public function destroyy($id)
    {
        $produitDepot = ProduitDepot::find($id);
        if ($produitDepot) {
            $produitDepot->delete();
            return redirect('/produit-depot/create')->with('success', 'Produit supprimé avec succès');
        } else {
            return redirect('/produit-depot/create')->with('error', 'Produit Depot non trouvé');
        }
    }

    public function historique()
    {
        $historiques = Historique::with('produit', 'depot', 'user')->get();
        return view('DepotProduit.historique', compact('historiques'));
    }
    
}  
    