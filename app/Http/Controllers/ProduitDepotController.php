<?php

namespace App\Http\Controllers;

use App\Models\ProduitDepot;
use App\Models\Produit;
use App\Models\Depot;
use App\Models\user;
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
    
    public function store(Request $request)
{
    $request->validate([
        'produit_id' => 'required|exists:produits,id',
        'depot_id' => 'required|exists:depots,id',
        'quantite' => 'required|numeric|min:1',
        'type' => 'required|in:addition,soustraction'
    ]);

    // Calculer le stock actuel pour ce produit dans ce dépôt
    $currentStock = ProduitDepot::where([
        'produit_id' => $request->produit_id,
        'depot_id' => $request->depot_id
    ])->sum('quantite');

    // Vérifier si la quantité de soustraction est supérieure au stock
    if ($request->type == 'soustraction' && $request->quantite > $currentStock) {
        return redirect()->back()->with('error', 'Quantité insuffisante en stock!');
    }

    ProduitDepot::create([
        'produit_id' => $request->produit_id,
        'depot_id' => $request->depot_id,
        'quantite' => $request->quantite,
        'type' => $request->type,
        'user_id' => auth()->user()->id,
    ]);

    return redirect()->back()->with('success', 'Produit ajouté au dépôt avec succès!');
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
        $produits = Produit::all();
        $depots = Depot::all();
        $produitsDepots = ProduitDepot::with(['produit', 'depot', 'user'])->get();
        return view('DepotProduit.historique', compact('produitsDepots', 'depots', 'produits'));
    }
}