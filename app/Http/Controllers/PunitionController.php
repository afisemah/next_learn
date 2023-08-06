<?php
// app/Http/Controllers/PunitionController.php
namespace App\Http\Controllers;

use App\Models\Punition;
use Illuminate\Http\Request;

class PunitionController extends Controller
{
    public function index()
    {
        $punitions = Punition::all();
        return view('punitions.index', compact('punitions'));
    }

    public function create()
    {
        return view('punitions.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'description' => 'nullable',
        ]);

        Punition::create($request->all());
        return redirect()->route('punitions.index')->with('success', 'Punition créée avec succès.');
    }

    public function show(Punition $punition)
    {
        return view('punitions.show', compact('punition'));
    }

    public function edit(Punition $punition)
    {
        return view('punitions.edit', compact('punition'));
    }

    public function update(Request $request, Punition $punition)
    {
        $request->validate([
            'nom' => 'required',
            'description' => 'nullable',
        ]);

        $punition->update($request->all());
        return redirect()->route('punitions.index')->with('success', 'Punition mise à jour avec succès.');
    }

    public function destroy(Punition $punition)
    {
        $punition->delete();
        return redirect()->route('punitions.index')->with('success', 'Punition supprimée avec succès.');
    }
}
