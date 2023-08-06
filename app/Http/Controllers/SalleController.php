<?php

// app/Http/Controllers/SalleController.php

namespace App\Http\Controllers;

use App\Models\Salle;
use Illuminate\Http\Request;

class SalleController extends Controller
{
    public function index()
    {
        // Récupérer toutes les salles et afficher la liste
        $salles = Salle::all();
        return view('salles.index', compact('salles'));
    }

    public function create()
    {
        // Afficher le formulaire pour créer une nouvelle salle
        return view('salles.create');
    }

    public function store(Request $request)
    {
        // Valider les données du formulaire et enregistrer la nouvelle salle
        $validatedData = $request->validate([
            'reference' => 'required|unique:salles',
            'type' => 'required|in:Cours,Travaux pratique',
            'nombre_places_max' => 'required|integer|min:1',
            'description' => 'nullable',
        ]);

        Salle::create($validatedData);

        return redirect()->route('salles.index')->with('success', 'Salle créée avec succès !');
    }

    public function show(Salle $salle)
    {
        // Afficher les détails d'une salle spécifique
        return view('salles.show', compact('salle'));
    }

    public function edit(Salle $salle)
    {
        // Afficher le formulaire d'édition pour une salle spécifique
        return view('salles.edit', compact('salle'));
    }

    public function update(Request $request, Salle $salle)
    {
        // Valider les données du formulaire et mettre à jour la salle
        $validatedData = $request->validate([
            'reference' => 'required|unique:salles,reference,' . $salle->id,
            'type' => 'required|in:Cours,Travaux pratique',
            'nombre_places_max' => 'required|integer|min:1',
            'description' => 'nullable',
        ]);

        $salle->update($validatedData);

        return redirect()->route('salles.index', $salle->id)->with('success', 'Salle mise à jour avec succès !');
    }

    public function destroy(Salle $salle)
    {
        // Supprimer une salle spécifique
        $salle->delete();

        return redirect()->route('salles.index')->with('success', 'Salle supprimée avec succès !');
    }
}
