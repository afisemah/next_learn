<!-- resources/views/enseignants/show.blade.php -->
@extends('layouts.layout')
@section('content')

<style>
    /* Additional styles for the detail items */
    .detail-item {
        border: 1px solid #ccc;
        border-radius: 5px;
        padding: 10px;
        margin-bottom: 10px;
        width: 45%;
        float: left;
        margin: 10px;
        box-shadow: 0px 1px 1px 1px rgba(120, 100, 90, 0.5);
    }
</style>

<div class="container">
    <h1>Détails de l'enseignant :<strong>{{ $enseignant->prenom }} {{ $enseignant->nom }}</strong></h1>
    <h1 style="text-align: center;"><strong> {{ $enseignant->telephone }} </strong></h1>
    <div class="detail-item">
        <h3><strong>Date de naissance:</strong> {{ $enseignant->date_naissance }}</h3>
    </div>
    <div class="detail-item">
        <h3><strong>Lieu de naissance:</strong> {{ $enseignant->lieu_naissance }}</h3>
    </div>
    <div class="detail-item">
            <h3><strong>Sexe:</strong>
                @if($enseignant->sexe === 'M')
                Masculin
                @elseif($enseignant->sexe === 'F')
                Féminin
                @endif
            </h3>
        </div>
        <div class="detail-item">
            <h3><strong>Type de contrat:</strong>
                @if($enseignant->type_contrat === 'permanent')
                Permanent
                @elseif($enseignant->type_contrat === 'non_permanent')
                Nom permanent
                @endif
            </h3>
        </div>
        <div class="detail-item">
            <h3><strong>Spécialité:</strong> {{ $enseignant->specialite }}</h3>
        </div>

        <div class="detail-item">
            <h3> <strong>Adresse:</strong> {{ $enseignant->adresse }}
        </div>
        <div class="detail-item">
            <h3> <strong>Email:</strong> {{ $enseignant->email }}
        </div>
        <div class="detail-item">
            <h3> <strong>Login:</strong> {{ $enseignant->login }}
        </div>
        </ul>
        <div class="action-buttons">
        <a href="{{ route('enseignants.index') }}" class="btn btn-primary">Retour à la liste des enseignants</a>

        </div>
    </div>
    @endsection