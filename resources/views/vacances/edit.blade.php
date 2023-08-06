@extends('layouts.layout')

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="container">
            <div class="row" id="content-wrapper">
                <div class="col-xs-12">
                    
                    <br>
                    <div class="row">
                        <div class="col-sm-12">
                            <h1>Modifier Vacance : {{ $vacance->nom }}</h1>
                            <form action="{{ route('vacances.update', $vacance->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="inputText"> Nom de la vacance
                                    </label> <input class="form-control" id="inputText" value="{{ $vacance->nom }}" type="text" name="nom" required="required">
                                </div>
                                <div class="form-group">
                                    <label for="inputDateDebut"> Date de début
                                    </label>
                                    <input class="form-control" id="inputDateDebut" value="{{ $vacance->date_debut }}" type="date" name="date_debut" required="required">
                                </div>
                                <div class="form-group">
                                    <label for="inputDateFin"> Date de fin
                                    </label>
                                    <input class="form-control" id="inputDateFin" value="{{ $vacance->date_fin }}" type="date" name="date_fin" required="required">
                                </div>
                                <div class="form-group">
                                    <label for="inputDateEnvoiNotification"> Date d'envoi de la notification
                                    </label>
                                    <input class="form-control" id="inputDateEnvoiNotification" value="{{ $vacance->date_envoyer_notification }}" type="date" name="date_envoyer_notification" required="required">
                                </div>
                                <br>
                                <button type="submit" class="btn btn-primary">Enregistrer les modifications</button>
                                <a href="{{ route('vacances.index') }}" class="btn btn-primary">Annuler les modifications</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
