<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Matiere;
use App\Models\Niveau; // Add the Niveau model namespace
use App\Models\SessionsScolaires; // Add the SessionsScolaires model namespace

class MatiereController extends Controller
{
    public function index()
    {
        $niveaux = Niveau::all(); // Fetch all niveaux from the database
        $matieres = Matiere::all();
        $sessions = SessionsScolaires::all(); // Fetch all sessions from the database

        return view('matieres.index', compact( 'matieres', 'sessions', 'niveaux'));
    }

    public function create()
    {
        $niveaux = Niveau::all(); // Fetch all niveaux from the database
        $sessions = SessionsScolaires::all(); // Fetch all sessions from the database
        return view('matieres.create', compact('niveaux', 'sessions'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom_fr' => 'required|string|max:255',
            'nom_ar' => 'required|string|max:255',
            'coefficient' => 'required|numeric',
            'niveau_id' => 'required|string|max:255',
            'session_id' => 'required|string|max:255',
        ]);

        Matiere::create($request->all());

        return redirect()->route('matieres.index')->with('success', 'Matière créé avec succès.');
    }

    public function show(Matiere $matiere)
    {
        return view('matieres.show', compact('matiere'));
    }

    public function edit(Matiere $matiere)
    {
        $niveaux = Niveau::all(); // Fetch all niveaux from the database
        $sessions = SessionsScolaires::all(); // Fetch all sessions from the database
        return view('matieres.edit', compact('matiere', 'niveaux', 'sessions'));
    }

    public function update(Request $request, Matiere $matiere)
    {
        $request->validate([
            'nom_fr' => 'required|string|max:255',
            'nom_ar' => 'required|string|max:255',
            'coefficient' => 'required|numeric',
            'niveau_id' => 'required|string|max:255',
            'session_id' => 'required|string|max:255',
        ]);

        $matiere->update($request->all());

        return redirect()->route('matieres.index')->with('success', 'Matière mise à jour avec succès.');
    }

    public function destroy(Matiere $matiere)
    {
        $matiere->delete();

        return redirect()->route('matieres.index')->with('success', 'Matière supprimée avec succès.');
    }
}
