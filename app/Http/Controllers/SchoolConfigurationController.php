<?php

// app/Http/Controllers/SchoolConfigurationController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SchoolConfiguration;

class SchoolConfigurationController extends Controller
{
    public function index()
    {
        // Afficher la configuration de l'école
        $configuration = SchoolConfiguration::first();
        return view('school_configuration.index', compact('configuration'));
    }

    public function create()
    {
        // Afficher le formulaire pour créer une configuration de l'école
        return view('school_configuration.create');
    }
    public function store(Request $request)
    {
        // Récupérer les données du formulaire
        $data = $request->except('logo');

        // Gérer l'upload du logo s'il est présent
        if ($request->hasFile('logo')) {
            $file = $request->file('logo');
            $fileName = $file->getClientOriginalName();
            $file->move(public_path('logos'), $fileName);
            $data['logo'] = $fileName;
        }

        // Enregistrer la nouvelle configuration de l'école
        SchoolConfiguration::create($data);
        return redirect()->route('school-configuration.index');
    }
    public function edit(SchoolConfiguration $configuration)
    {
        // Afficher le formulaire pour éditer la configuration de l'école
        return view('school_configuration.edit', compact('configuration'));
    }

    public function update(Request $request, SchoolConfiguration $configuration)
    {


        // Récupérer les données du formulaire
        $data = $request->except('logo');

        // Gérer l'upload du nouveau logo s'il est présent
        if ($request->hasFile('logo')) {
            $file = $request->file('logo');
            $fileName = $file->getClientOriginalName();
            $file->move(public_path('logos'), $fileName);
            $data['logo'] = $fileName;
        }

        // Mettre à jour la configuration de l'école
        $configuration->update($data);
        return redirect()->route('school-configuration.index');
    }
    public function destroy(SchoolConfiguration $configuration)
    {
        // Supprimer la configuration de l'école
        $configuration->delete();
        return redirect()->route('school-configuration.index');
    }
}
