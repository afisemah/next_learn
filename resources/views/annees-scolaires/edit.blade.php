<!-- resources/views/annees_scolaires/edit.blade.php -->

@extends('layouts.layout')

@section('content')
<div class="row">
    <div class="col-sm-12">
        <h1>Modifier l'Année Scolaire</h1>

        <form action="{{ route('annees-scolaires.update', $annee_scolaire->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="inputText"> Titre</label>
                <input class="form-control" type="text" name="titre" id="titre" value="{{ $annee_scolaire->titre }}" required>
            </div>
            <div>
                <label for="date_debut">Date de début :</label>
                <input class="form-control" type="date" name="date_debut" id="date_debut" value="{{ $annee_scolaire->date_debut }}" required>
            </div>
            <div>
                <label for="date_fin">Date de fin :</label>
                <input class="form-control" type="date" name="date_fin" id="date_fin" value="{{ $annee_scolaire->date_fin }}" required>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Enregistrer modification</button>
            <a href="{{ route('annees-scolaires.index') }}" class="btn btn-primary">Annuler modification</a>
        </form>

    </div>
</div>
<!-- Add the form to edit the annee -->
@endsection