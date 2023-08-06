<?php
namespace App\Http\Controllers;


use App\Models\Parents;
use Illuminate\Http\Request;

class ParentsController extends Controller
{
    public function index()
    {
        $parents = Parents::all();
        return view('parents.index', compact('parents'));
    }

    public function create()
    {
        return view('parents.create');
    }

    public function store(Request $request)
    {
        // Validation des données du formulaire
        $validatedData = $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'relation' => 'required|string|max:255',
            'date_naissance' => 'nullable|date',
            'lieu_naissance' => 'nullable|string|max:255',
            'sexe' => 'required|in:homme,femme',
            'adresse' => 'nullable|string|max:255',
            'email' => 'nullable|email|max:255',
            'tel1' => 'nullable|string|max:255',
            'tel2' => 'nullable|string|max:255',
        ]);

        Parents::create($validatedData);

        return redirect()->route('parents.index')->with('success', 'Parent ajouté avec succès.');
    }

    public function show(Parents $parents)
    {
        return view('parents.show', compact('parents'));
    }

    public function edit(Parents $parent)
    {
        return view('parents.edit', compact('parent'));
    }

    public function update(Request $request, Parents $parent)
    {
        // Validation des données du formulaire
        $validatedData = $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'relation' => 'required|string|max:255',
            'date_naissance' => 'nullable|date',
            'lieu_naissance' => 'nullable|string|max:255',
            'sexe' => 'required|in:homme,femme',
            'adresse' => 'nullable|string|max:255',
            'email' => 'nullable|email|max:255',
            'tel1' => 'nullable|string|max:255',
            'tel2' => 'nullable|string|max:255',
        ]);

        $parent->update($validatedData);

        return redirect()->route('parents.index')->with('success', 'Parent mis à jour avec succès.');
    }

    public function destroy(Parents $parent)
    {
        $parent->delete();
        return redirect()->route('parents.index')->with('success', 'Parent supprimé avec succès.');
    }
}
