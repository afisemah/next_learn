<?php
// app/Http/Controllers/EnseignantController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Enseignant;

class EnseignantController extends Controller
{
    public function index()
    {
        $enseignants = Enseignant::all();
        return view('enseignants.index', compact('enseignants'));
    }

    public function create()
    {
        return view('enseignants.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            // Add validation rules for the attributes
        ]);

        Enseignant::create($request->all());

        return redirect()->route('enseignants.index')->with('success', 'Enseignant created successfully.');
    }

    public function show(Enseignant $enseignant)
    {
        return view('enseignants.show', compact('enseignant'));
    }

    public function edit(Enseignant $enseignant)
    {
        return view('enseignants.edit', compact('enseignant'));
    }

    public function update(Request $request, Enseignant $enseignant)
    {
        $request->validate([
            // Add validation rules for the attributes
        ]);

        $enseignant->update($request->all());

        return redirect()->route('enseignants.index')->with('success', 'Enseignant updated successfully.');
    }

    public function destroy(Enseignant $enseignant)
    {
        $enseignant->delete();

        return redirect()->route('enseignants.index')->with('success', 'Enseignant deleted successfully.');
    }
}
