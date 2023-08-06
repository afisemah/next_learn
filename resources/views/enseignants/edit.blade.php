<!-- resources/views/enseignants/edit.blade.php -->
@extends('layouts.layout')

@section('content')
<div class="container">
    <h1>Modifier l'enseignant {{ $enseignant->prenom }} {{ $enseignant->nom }}</h1>
    <form action="{{ route('enseignants.update', $enseignant->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="prenom" class="form-label">Prénom</label>
            <input type="text" class="form-control" id="prenom" name="prenom" value="{{ $enseignant->prenom }}" required>
        </div>
        <div class="mb-3">
            <label for="nom" class="form-label">Nom</label>
            <input type="text" class="form-control" id="nom" name="nom" value="{{ $enseignant->nom }}" required>
        </div>
        <div class="mb-3">
            <label for="date_naissance" class="form-label">Date de naissance</label>
            <input type="date" class="form-control" id="date_naissance" name="date_naissance" value="{{ $enseignant->date_naissance }}" required>
        </div>
        <div class="mb-3">
            <label for="lieu_naissance" class="form-label">Lieu de naissance</label>
            <input type="text" class="form-control" id="lieu_naissance" name="lieu_naissance" value="{{ $enseignant->lieu_naissance }}" required>
        </div>
        <div class="mb-3">
            <label for="sexe" class="form-label">Sexe</label>
            <select class="form-control" id="sexe" name="sexe" required>
                <option value="M" @if($enseignant->sexe === 'M') selected @endif>Masculin</option>
                <option value="F" @if($enseignant->sexe === 'F') selected @endif>Féminin</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="type_contrat" class="form-label">Type de contrat</label>
            <select class="form-control" id="type_contrat" name="type_contrat" required>
                <option value="permanent" @if($enseignant->type_contrat === 'permanent') selected @endif>Permanent</option>
                <option value="non_permanent" @if($enseignant->type_contrat === 'non_permanent') selected @endif>Non permanent</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="specialite" class="form-label">Spécialité</label>
            <input type="text" class="form-control" id="specialite" name="specialite" value="{{ $enseignant->specialite }}">
        </div>
        <div class="mb-3">
            <label for="telephone" class="form-label">Téléphone</label>
            <input type="tel" class="form-control" id="telephone" name="telephone" value="{{ $enseignant->telephone }}">
        </div>
        <div class="mb-3">
            <label for="adresse" class="form-label">Adresse</label>
            <textarea class="form-control" id="adresse" name="adresse" rows="3">{{ $enseignant->adresse }}</textarea>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $enseignant->email }}">
        </div>
        <div class="mb-3">
            <label for="login" class="form-label">Login</label>
            <input type="text" class="form-control" id="login" name="login" value="{{ $enseignant->login }}">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Mot de passe</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <button type="submit" class="btn btn-primary">Enregistrer</button>
        <a href="{{ route('enseignants.index') }}" class="btn btn-primary">Annuler modification</a>

    </form>
</div>
@endsection
