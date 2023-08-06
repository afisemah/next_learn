<!-- resources/views/sessions_scolaires/edit.blade.php -->

@extends('layouts.layout')

@section('content')
<div class="row">
    <div class="col-sm-12">
        <h1>Modifier la Session Scolaire</h1>

        <form action="{{ route('sessions-scolaires.update', $session->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="inputText"> Titre</label>
                <input class="form-control" type="text" name="titre" id="titre" value="{{ $session->titre }}" required>
            </div>
            <div>
                <label for="date_debut">Date de début :</label>
                <input class="form-control" type="date" name="date_debut" id="date_debut" value="{{ $session->date_debut }}" required>
            </div>
            <div>
                <label for="date_fin">Date de fin :</label>
                <input class="form-control" type="date" name="date_fin" id="date_fin" value="{{ $session->date_fin }}" required>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Enregistrer modification</button>
            <a href="{{ route('sessions-scolaires.index') }}" class="btn btn-primary">Annuler modification</a>
        </form>

    </div>
</div>
<!-- Add the form to edit the session -->
@endsection