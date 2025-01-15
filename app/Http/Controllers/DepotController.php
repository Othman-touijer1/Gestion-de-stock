<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Depot;
use App\Models\ProduitDepot;
use App\Http\Requests\StoreDepotRequest;
class DepotController extends Controller
{
    public function indexdepot()
    {
        $depot = depot::all();
        return view('Depots.indexdepot', compact('depot'));
    }

    public function craetedepot(){
        return view('Depots.createdepot');
    }

    public function store(StoreDepotRequest $request)
    {
        Depot::create($request->all());
        return redirect('/indexdepot')->with('success', 'Dépôt créé avec succès');
    }
    
    public function destroy($id)
    {
        $depot = Depot::findOrFail($id);
        $depot->delete();
        return redirect()->back()->with('success', 'Dépôt supprimé avec succès');
    }

    public function show($id)
    {
        $depot = Depot::findOrFail($id);
        $produits_depot = ProduitDepot::where('depot_id', $id)
            ->join('produits', 'produit_depot.produit_id', '=', 'produits.id')
            ->select('produits.*', 'produit_depot.quantite')
            ->get();

        return view('Depots.show', compact('depot', 'produits_depot'));
    }
}
