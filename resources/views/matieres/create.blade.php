<!-- resources/views/matieres/create.blade.php -->
@extends('layouts.layout')

@section('content')
<div class="container">
    <h1>Ajout Matiere</h1>
    <form action="{{ route('matieres.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nom_fr">Nom (Français)</label>
            <input type="text" name="nom_fr" id="nom_fr" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="nom_ar">Nom (Arabe)</label>
            <input type="text" name="nom_ar" id="nom_ar" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="coefficient">Coefficient</label>
            <input type="number" name="coefficient" id="coefficient" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="niveau">Niveau</label>
            <input type="text" name="niveau" id="niveau" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="session">Session</label>
            <input type="text" name="session" id="session" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">Enregistrer</button>
        <a href="{{ route('matieres.index') }}" class="btn btn-secondary">Annuler</a>
    </form>
</div>
@endsection
