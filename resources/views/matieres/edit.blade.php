<!-- resources/views/matieres/edit.blade.php -->
@extends('layouts.layout')

@section('content')
<div class="container">
    <h1>Modifier Matière</h1>
    <form action="{{ route('matieres.update', $matiere->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nom_fr">Nom (Français)</label>
            <input type="text" name="nom_fr" id="nom_fr" class="form-control" value="{{ $matiere->nom_fr }}" required>
        </div>
        <div class="form-group">
            <label for="nom_ar">Nom (Arabe)</label>
            <input type="text" name="nom_ar" id="nom_ar" class="form-control" value="{{ $matiere->nom_ar }}" required>
        </div>
        <div class="form-group">
            <label for="coefficient">Coefficient</label>
            <input type="number" name="coefficient" id="coefficient" class="form-control" value="{{ $matiere->coefficient }}" required>
        </div>
        <div class="form-group">
            <label for="niveau_id">Niveau</label>
            <select name="niveau_id" id="niveau" class="form-control" required>
                <option value="">Sélectionner un niveau</option>
                @foreach($niveaux as $niveau)
                <option value="{{ $niveau->id }}" {{ $matiere->niveau_id === $niveau->id ? 'selected' : '' }}>
                    {{ $niveau->reference_numerique }} : {{ $niveau->reference_alphabetique }}
                </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="session_id">Session</label>
            <select name="session_id" id="session" class="form-control" required>
                <option value="">Sélectionner une session</option>
                @foreach($sessions as $session)
                <option value="{{ $session->id }}" {{ $matiere->session_id === $session->id ? 'selected' : '' }}>
                    {{ $session->titre }}
                </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Enregistrer</button>
        <a href="{{ route('matieres.index') }}" class="btn btn-secondary">Annuler</a>
    </form>
</div>
@endsection