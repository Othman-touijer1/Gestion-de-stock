<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Facture;
use App\Models\Produit;
use App\Models\ProduitDepot;
use App\Models\Client;



class FactureController extends Controller
{

    public function index()
    {
        $produits = Produit::all();
        $clients = Client::all();
        $produitsDepots = ProduitDepot::with(['produit', 'depot'])->get();
        return view('Factures.index', compact('produits', 'produitsDepots', 'clients'));
    }


    
}