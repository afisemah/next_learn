<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vacance;

class VacanceController extends Controller
{
    public function index()
    {
        $vacances = Vacance::all();
        return view('vacances.index', compact('vacances'));
    }

    public function create()
    {
        return view('vacances.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'date_debut' => 'required|date',
            'date_fin' => 'required|date|after_or_equal:date_debut',
            'date_envoyer_notification' => 'nullable|date',
        ]);

        Vacance::create($request->all());

        return redirect()->route('vacances.index')->with('success', 'Vacance créée avec succès !');
    }

    public function show(Vacance $vacance)
    {
        return view('vacances.show', compact('vacance'));
    }

    public function edit(Vacance $vacance)
    {
        return view('vacances.edit', compact('vacance'));
    }

    public function update(Request $request, Vacance $vacance)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'date_debut' => 'required|date',
            'date_fin' => 'required|date|after_or_equal:date_debut',
            'date_envoyer_notification' => 'nullable|date',
        ]);

        $vacance->update($request->all());

        return redirect()->route('vacances.index')->with('success', 'Vacance mise à jour avec succès!');
    }

    public function destroy(Vacance $vacance)
    {
        $vacance->delete();

        return redirect()->route('vacances.index')->with('success', 'Vacance supprimée avec succès!');
    }
}
