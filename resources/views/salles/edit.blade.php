@extends('layouts.layout')

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="container">
            <div class="row" id="content-wrapper">
                <div class="col-xs-12">
                    <div class="d-flex justify-content-center mx-auto gap-3">
                        <!-- Default Modal -->
                        <div class="col-lg-4 col-md-6">
                            <div class="mt-3">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#basicModal">
                                    Ajout Salle
                                </button>
                                <!-- Autres boutons pour les fonctionnalités supplémentaires -->
                            </div>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="basicModal" tabindex="-1" aria-hidden="true">
                            <!-- ... Contenu du modal ... -->
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-12">
                            <h1>Modifier Salle : {{ $salle->reference }}</h1>
                            <form action="{{ route('salles.update', $salle->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="inputText"> Référence de la salle
                                    </label> <input class="form-control" id="inputText" value="{{ $salle->reference }}" type="text" name="reference" required="required">
                                </div>
                                <div class="form-group">
                                    <label for="inputSelect"> Type de salle
                                    </label>
                                    <select class="form-control" id="inputSelect" name="type" required>
                                        <option value="Cours" @if($salle->type === 'Cours') selected @endif>Cours</option>
                                        <option value="Travaux pratique" @if($salle->type === 'Travaux pratique') selected @endif>Travaux pratique</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="inputNumber"> Nombre de places max
                                    </label> <input class="form-control" id="inputNumber" value="{{ $salle->nombre_places_max }}" type="number" name="nombre_places_max" required="required">
                                </div>
                                <div class="form-group">
                                    <label for="inputTextArea"> Description de la salle
                                    </label>
                                    <textarea class="form-control" id="inputTextArea" rows="3" name="description">{{ $salle->description }}</textarea>
                                </div>
                                <br>
                                <button type="submit" class="btn btn-primary">Enregistrer les modifications</button>
                                <a href="{{ route('salles.index') }}" class="btn btn-primary">Annuler les modifications</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
