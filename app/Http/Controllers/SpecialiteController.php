<?php
// app/Http/Controllers/SpecialiteController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Specialite;

class SpecialiteController extends Controller
{
    public function index()
    {
        $specialites = Specialite::all();
        return view('specialites.index', compact('specialites'));
    }

    public function create()
    {
        return view('specialites.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'description' => 'required',
        ]);

        Specialite::create($request->all());

        return redirect()->route('specialites.index')
            ->with('success', 'Specialite created successfully.');
    }

    public function show(Specialite $specialite)
    {
        return view('specialites.show', compact('specialite'));
    }

    public function edit(Specialite $specialite)
    {
        return view('specialites.edit', compact('specialite'));
    }

    public function update(Request $request, Specialite $specialite)
    {
        $request->validate([
            'nom' => 'required',
            'description' => 'required',
        ]);

        $specialite->update($request->all());

        return redirect()->route('specialites.index')
            ->with('success', 'Specialite updated successfully');
    }

    public function destroy(Specialite $specialite)
    {
        $specialite->delete();

        return redirect()->route('specialites.index')
            ->with('success', 'Specialite deleted successfully');
    }
}
