<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DevisController extends Controller
{
    public function create()
    {
        return view('devis.create'); // Assurez-vous que cette vue existe
    }

    public function store(Request $request)
    {
        // Validez et traitez les données ici
        $validated = $request->validate([
            'nom' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        // Logique pour enregistrer ou envoyer les données

        return redirect()->route('devis.create')->with('success', 'Votre demande a été envoyée avec succès.');
    }
}
