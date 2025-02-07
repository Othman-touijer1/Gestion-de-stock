<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::all();
        return view('Client.indexC', compact('clients'));
    }
    public function store(Request $request)
    {
        // Validation des données
        $request->validate([
            'entreprise' => 'required|string|max:255',
            'responsable' => 'required|string|max:255',
            'adresse' => 'required|string|max:255',
            'telephone' => 'required|string|max:15',
            'email' => 'required|email|max:255',
        ]);

        // Création du client
        Client::create([
            'entreprise' => $request->entreprise,
            'responsable' => $request->responsable,
            'adresse' => $request->adresse,
            'telephone' => $request->telephone,
            'email' => $request->email,
        ]);

        // Redirection avec un message de succès
        return redirect()->route('clients.index')->with('success', 'Client ajouté avec succès');
    }
    public function edit($id)
    {
        $client = Client::findOrFail($id);
        return response()->json($client);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'entreprise' => 'required|string|max:255',
            'responsable' => 'required|string|max:255',
            'adresse' => 'required|string|max:255',
            'telephone' => 'required|string|max:15',
            'email' => 'required|email|max:255',
        ]);

        $client = Client::findOrFail($id);
        $client->update([
            'entreprise' => $request->entreprise,
            'responsable' => $request->responsable,
            'adresse' => $request->adresse,
            'telephone' => $request->telephone,
            'email' => $request->email,
        ]);

        return redirect()->route('clients.index')->with('success', 'Client modifié avec succès');
    }
    public function destroy($id)
    {
        $client = Client::findOrFail($id);
        $client->delete();

        return redirect()->route('clients.index')->with('success', 'Client supprimé avec succès');
    }
}
