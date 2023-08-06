<!-- resources/views/matieres/show.blade.php -->
@extends('layouts.layout')

@section('content')
<div class="container">
    <h1>Détails Matiere</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Nom (Français): {{ $matiere->nom_fr }}</h5>
            <h5 class="card-title">Nom (Arabe): {{ $matiere->nom_ar }}</h5>
            <p class="card-text">Coefficient: {{ $matiere->coefficient }}</p>
            <p class="card-text">Niveau: {{ $matiere->niveau }}</p>
            <p class="card-text">Session: {{ $matiere->session }}</p>
            <a href="{{ route('matieres.edit', $matiere->id) }}" class="btn btn-warning">Modifier</a>
            <a href="{{ route('matieres.index') }}" class="btn btn-secondary">Retour</a>
        </div>
    </div>
</div>
@endsection
