<?php

// app/Http/Controllers/SessionsScolairesController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SessionsScolaires;

class SessionsScolairesController extends Controller
{
    public function index()
    {
        $sessions = SessionsScolaires::all();
        return view('sessions_scolaires.index', compact('sessions'));
    }

    public function create()
    {
        return view('sessions_scolaires.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'titre' => 'required',
            'date_debut' => 'required|date',
            'date_fin' => 'required|date|after:date_debut',
        ]);

        SessionsScolaires::create($request->all());

        return redirect()->route('sessions-scolaires.index')
            ->with('success', 'Session scolaire created successfully.');
    }

    public function show(SessionsScolaires $session)
    {
        return view('sessions_scolaires.show', compact('session'));
    }

    public function edit(SessionsScolaires $session)
    {
        return view('sessions_scolaires.edit', compact('session'));
    }

    public function update(Request $request, SessionsScolaires $session)
    {
        $request->validate([
            'titre' => 'required',
            'date_debut' => 'required|date',
            'date_fin' => 'required|date|after:date_debut',
        ]);

        $session->update($request->all());

        return redirect()->route('sessions-scolaires.index')
            ->with('success', 'Session scolaire updated successfully');
    }

    public function destroy(SessionsScolaires $session)
    {
        $session->delete();

        return redirect()->route('sessions-scolaires.index')
            ->with('success', 'Session scolaire deleted successfully');
    }
}
