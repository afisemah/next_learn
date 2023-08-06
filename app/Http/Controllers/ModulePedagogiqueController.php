<?php

// app/Http/Controllers/ModulePedagogiqueController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModulePedagogique;

class ModulePedagogiqueController extends Controller
{
    public function index()
    {
        $modules = ModulePedagogique::all();
        return view('modules.index', compact('modules'));
    }

    public function create()
    {
        return view('modules.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'coeff' => 'required|numeric',
            'description' => 'required',
        ]);

        ModulePedagogique::create($request->all());

        return redirect()->route('modules.index')
            ->with('success', 'Module pédagogique créé avec succès.');
    }

    public function show(ModulePedagogique $module)
    {
        return view('modules.show', compact('module'));
    }

    public function edit(ModulePedagogique $module)
    {
        return view('modules.edit', compact('module'));
    }

    public function update(Request $request, ModulePedagogique $module)
    {
        $request->validate([
            'nom' => 'required',
            'coeff' => 'required|numeric',
            'description' => 'required',
        ]);

        $module->update($request->all());

        return redirect()->route('modules.index')
            ->with('success', 'Module pédagogique mis à jour avec succès.');
    }

    public function destroy(ModulePedagogique $module)
    {
        $module->delete();

        return redirect()->route('modules.index')
            ->with('success', 'Module pédagogique supprimé avec succès.');
    }
}
