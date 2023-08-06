<?php
// app/Http/Controllers/NiveauController.php
// app/Http/Controllers/NiveauController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Niveau;

class NiveauController extends Controller
{
    public function index()
    {
        $niveaux = Niveau::all();
        return view('niveaux.index', compact('niveaux'));
    }

    public function create()
    {
        return view('niveaux.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'reference_alphabetique' => 'required',
            'reference_numerique' => 'required',
            'description' => 'required',
        ]);

        Niveau::create($request->all());

        return redirect()->route('niveaux.index')
            ->with('success', 'Niveau created successfully.');
    }

    public function show(Niveau $niveau)
    {
        return view('niveaux.show', compact('niveau'));
    }

    public function edit(Niveau $niveau)
    {
        return view('niveaux.edit', compact('niveau'));
    }

    public function update(Request $request, Niveau $niveau)
    {
        $request->validate([
            'reference_alphabetique' => 'required',
            'reference_numerique' => 'required',
            'description' => 'required',
        ]);

        $niveau->update($request->all());

        return redirect()->route('niveaux.index')
            ->with('success', 'Niveau updated successfully');
    }

    public function destroy(Niveau $niveau)
    {
        $niveau->delete();

        return redirect()->route('niveaux.index')
            ->with('success', 'Niveau deleted successfully');
    }
}
