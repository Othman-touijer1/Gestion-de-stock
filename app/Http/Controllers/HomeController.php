<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Produit;
use App\Models\Categorie;
use App\Models\Depot;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
class HomeController extends Controller
{
    public function home(){
        $produits = Produit::all();
        $depot = depot::all();
        return view('home', compact('produits', 'depot'));
    }
    public function index()
    {
        $produits = Produit::all();
        return view('produits.index', compact('produits'));
    }
    
    public function create(){
        $categories = Categorie::all();
        return view('produits.create', compact('categories'));
    }
    public function store(StoreProductRequest $request)
    {
        $imagePath = $request->file('imageProduit')->store('images', 'public');
        
        Produit::create([
            'titre' => $request->titreProduit,
            'image' => $imagePath,
            'referent_id' => $request->nomReferent,
            'description' => $request->descriptionProduit,
            'categorie' => $request->categoriesProduit,
        ]);

        return redirect('/index')->with('success', 'Produit ajouté avec succès!');
    }

    public function getProduit($id)
    {
        $produit = Produit::findOrFail($id);
        return response()->json($produit);
    }
    
    public function update(UpdateProductRequest $request, $id)
    {
        $produit = Produit::findOrFail($id);
        $produit->titre = $request->titreProduit;
        $produit->referent_id = $request->nomReferent;
        $produit->description = $request->descriptionProduit;
        $produit->categorie = $request->categoriesProduit;

        if ($request->hasFile('imageProduit')) {
            if ($produit->image) {
                Storage::delete('public/' . $produit->image);
            }
            $imagePath = $request->file('imageProduit')->store('images', 'public');
            $produit->image = $imagePath;
        }

        $produit->save();
        return redirect('/index')->with('success', 'Produit mis à jour avec succès!');
    }
    public function destroy($id)
    {
        $produit = Produit::findOrFail($id);
        Storage::delete('public/' . $produit->image);
        $produit->delete();

        return redirect('/index')->with('success', 'Produit supprimé avec succès!');
    } 
    
    public function showQuantites($id)
    {
        // Récupérer le produit par son ID
        $produit = Produit::find($id);

        // Récupérer la quantité du produit dans chaque dépôt
        $quantitesDepot = Depot::with('produits')
                                ->whereHas('produits', function($query) use ($produit) {
                                    $query->where('produit_id', $produit->id);
                                })
                                ->get()
                                ->map(function($depot) use ($produit) {
                                    return [
                                        'depot' => $depot->nom,
                                        'quantite' => $depot->produits->find($produit->id)->pivot->quantite
                                    ];
                                });

        return response()->json($quantitesDepot);
    }


}
