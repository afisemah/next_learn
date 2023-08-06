<?php

namespace App\Http\Controllers;

use App\Models\AnneeScolaire;
use Illuminate\Http\Request;

class AnneeScolaireController extends Controller
{

    public function index()
    {
        $annees = AnneeScolaire::all();
        return view('annees-scolaires.index', compact('annees'));
    }

    public function create()
    {
        return view('annees-scolaires.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'titre' => 'required',
            'date_debut' => 'required|date',
            'date_fin' => 'required|date|after:date_debut',
        ]);

        AnneeScolaire::create($request->all());

        return redirect()->route('annees-scolaires.index')
            ->with('success', 'Annee scolaire created successfully.');
    }

    public function show(AnneeScolaire $annee)
    {
        return view('annees-scolaires.show', compact('annee'));
    }

    public function edit(AnneeScolaire $annee_scolaire)
    {
        return view('annees-scolaires.edit', compact('annee_scolaire'));
    }

    public function update(Request $request, AnneeScolaire $annee_scolaire)
    {
        $request->validate([
            'titre' => 'required',
            'date_debut' => 'required|date',
            'date_fin' => 'required|date|after:date_debut',
        ]);

        $annee_scolaire->update($request->all());

        return redirect()->route('annees-scolaires.index')
            ->with('success', 'Annee scolaire updated successfully');
    }

    public function destroy(AnneeScolaire $annee_scolaire)
    {
        $annee_scolaire->delete();

        return redirect()->route('annees-scolaires.index')
            ->with('success', 'Annee scolaire deleted successfully');
    }
}
