<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Produit;
use App\Models\Categorie;
use App\Models\Depot;
use App\Models\ProduitDepot;
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


    
    public function viewProduit($id)
    {
        $produitDepots = ProduitDepot::with(['produit', 'depot'])
            ->where('produit_id', $id)
            ->get();
        
        return response()->json([
            'produit' => [
                'titre' => $produitDepots->first()->produit->titre,
                'image' => $produitDepots->first()->produit->image,
            ],
            'depots' => $produitDepots->map(function($item) {
                return [
                    'nom' => $item->depot->nom,
                    'quantite' => $item->quantite
                ];
            })
        ]);
    }

    // public function getInventory(Product $product)
    // {
    //     $product->load('depots'); // Charger la relation avec les dépôts
    //     return response()->json([
    //         'product' => $product->titre,
    //         'depots' => $product->depots
    //     ]);
    // }
    
    // public function viewProduit($id) {
    //     $produitsDepots = ProduitDepot::with(['produit', 'depot'])
    //         ->where('produit_id', $id)
    //         ->get();
    
    //     // Calculer la quantité totale par dépôt
    //     $stockParDepot = $produitsDepots
    //         ->groupBy('depot_id')
    //         ->map(function ($items) {
    //             $addition = $items->where('type', 'addition')->sum('quantite');
    //             $soustraction = $items->where('type', 'soustraction')->sum('quantite');
    //             return $addition - $soustraction;
    //         });
    
    //     return response()->json([
    //         'produit' => [
    //             'titre' => $produitsDepots->first()->produit->titre,
    //             'image' => $produitsDepots->first()->produit->image,
    //         ],
    //         'depots' => $produitsDepots->map(function($item) use ($stockParDepot) {
    //             return [
    //                 'nom' => $item->depot->nom,
    //                 'quantite' => $stockParDepot[$item->depot_id] ?? 0
    //             ];
    //         })
    //     ]);
    // }
}
