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
            'quantite' => 'required|numeric|min:1'
        ]);

        ProduitDepot::create([
            'produit_id' => $request->produit_id,
            'depot_id' => $request->depot_id,
            'quantite' => $request->quantite,
            'user_id' => auth()->user()->id, // L'utilisateur connecté
        ]);
        return redirect()->back()->with('success', 'Produit ajouté au dépôt avec succès!');
    }
    public function update(Request $request)
    {
        $request->validate([
            'produit_id' => 'required|exists:produits,id',
            'depot_id' => 'required|exists:depots,id',
            'quantite' => 'required|numeric|min:1'
        ]);

        ProduitDepot::where([
            'produit_id' => $request->produit_id,
            'depot_id' => $request->depot_id
        ])->update([
            'quantite' => $request->quantite,
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