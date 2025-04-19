<?php

namespace App\Http\Controllers;

use App\Models\Onduleur;
use App\Models\InverterData;
use Illuminate\Http\Request;

class OnduleurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $onduleurs = Onduleur::orderBy('created_at', 'desc')->get();
        return view('onduleurs.index', compact('onduleurs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('onduleurs.create'); // Assurez-vous que cette vue existe
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'required|exists:users,id',
            'installation_id' => 'required|exists:installations,id',
            'modele' => 'required|string|max:255',
            'numero_serie' => 'required|string|max:255|unique:onduleurs',
            'est_connecte' => 'required|boolean'
        ]);

        $onduleur = Onduleur::create($validatedData);

        return redirect()->route('onduleurs.index')
            ->with('success', 'Onduleur ajouté avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Onduleur  $onduleur
     * @return \Illuminate\Http\Response
     */
    public function show(Onduleur $onduleur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Onduleur  $onduleur
     * @return \Illuminate\Http\Response
     */
    public function edit(Onduleur $onduleur)
    {
        return view('onduleurs.edit', compact('onduleur'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Onduleur  $onduleur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Onduleur $onduleur)
    {
        $validatedData = $request->validate([
            'modele' => 'required|string|max:255',
            'numero_serie' => 'required|string|max:255|unique:onduleurs,numero_serie,' . $onduleur->id,
            'est_connecte' => 'required|boolean'
        ]);

        $onduleur->update($validatedData);

        return redirect()->route('onduleurs.index')
            ->with('success', 'Onduleur mis à jour avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Onduleur  $onduleur
     * @return \Illuminate\Http\Response
     */
    public function destroy(Onduleur $onduleur)
    {
        $onduleur->delete();

        return redirect()->route('onduleurs.index')
            ->with('success', 'Onduleur supprimé avec succès');
    }

    /**
     * Basculer l'état de connexion de l'onduleur
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function toggleConnection($id)
    {
        $onduleur = Onduleur::findOrFail($id);
        $onduleur->est_connecte = !$onduleur->est_connecte;
        $onduleur->save();

        $status = $onduleur->est_connecte ? 'connecté' : 'déconnecté';
        return back()->with('success', "L'onduleur a été $status avec succès");
    }

    /**
     * Afficher les performances détaillées d'un onduleur
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function performance($id)
    {
        $onduleur = Onduleur::findOrFail($id);
        
        // Récupérer les données de performance des dernières 24 heures
        $donnees = InverterData::where('inverter_id', $onduleur->id)
            ->where('created_at', '>=', now()->subHours(24))
            ->orderBy('created_at')
            ->get();

        return view('onduleurs.performance', compact('onduleur', 'donnees'));
    }

    /**
     * Récupérer les dernières données de l'onduleur
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getLatestData($id)
    {
        $onduleur = Onduleur::findOrFail($id);
        
        $latestData = InverterData::where('inverter_id', $onduleur->id)
            ->latest()
            ->first();

        if (!$latestData) {
            return response()->json([
                'success' => false,
                'message' => 'Aucune donnée disponible'
            ], 404);
        }

        return response()->json([
            'success' => true,
            'data' => [
                'power' => $latestData->power,
                'daily_energy' => $latestData->daily_energy,
                'total_energy' => $latestData->total_energy,
                'temperature' => $latestData->temperature,
                'efficiency' => $latestData->efficiency,
                'voltage' => $latestData->voltage,
                'current' => $latestData->current,
                'frequency' => $latestData->frequency,
                'status' => $latestData->status,
                'timestamp' => $latestData->created_at
            ]
        ]);
    }
}
