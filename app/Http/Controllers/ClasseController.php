<?php
// app/Http/Controllers/ClasseController.php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Niveau;
use App\Models\Classe;

class ClasseController extends Controller
{
    public function index()
    {
        $classes = Classe::all();
        $niveaux = Niveau::all(); // Fetch all niveaux from the database

        return view('classes.index', compact('classes', 'niveaux'));
    }

    public function create()
    {
        $niveaux = Niveau::all();
        return view('classes.create', compact('niveaux'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'niveau_id' => 'required',
            'nom' => 'required',
            'description' => 'nullable',
        ]);

        Classe::create($request->all());

        return redirect()->route('classes.index')
            ->with('success', 'Classe created successfully.');
    }

    public function show(Classe $classe)
    {
        return view('classes.show', compact('classe'));
    }

    public function edit(Classe $classe)
    {
        $niveaux = Niveau::all();
        return view('classes.edit', compact('classe', 'niveaux'));
    }

    public function update(Request $request, Classe $classe)
    {
        $request->validate([
            'niveau_id' => 'required',
            'text' => 'required',
            'description' => 'nullable',
        ]);

        $classe->update($request->all());

        return redirect()->route('classes.index')
            ->with('success', 'Classe updated successfully');
    }

    public function destroy(Classe $classe)
    {
        $classe->delete();

        return redirect()->route('classes.index')
            ->with('success', 'Classe deleted successfully');
    }
}
