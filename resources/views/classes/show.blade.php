<!-- resources/views/classes/show.blade.php -->
@extends('layouts.layout')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Détails de la Classe</div>
                <div class="card-body">
                    <p><strong>Niveau:</strong> {{ $classe->niveau->nom }}</p>
                    <p><strong>Spécialité:</strong> {{ $classe->specialite->nom }}</p>
                    <p><strong>Text:</strong> {{ $classe->text }}</p>
                    <p><strong>Description:</strong> {{ $classe->description }}</p>
                    <div class="form-group">
                        <a href="{{ route('classes.edit', $classe->id) }}" class="btn btn-primary">Modifier</a>
                        <form action="{{ route('classes.destroy', $classe->id) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Supprimer</button>
                        </form>
                        <a href="{{ route('classes.index') }}" class="btn btn-primary">Retour</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
