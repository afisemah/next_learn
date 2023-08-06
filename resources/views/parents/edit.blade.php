@extends('layouts.layout')

@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="box bordered-box orange-border" style="margin-bottom: 0;">
            <div class="box-content box-no-padding">
                <div class="responsive-table">
                    <div class="scrollable-area">
                        <div id="table_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h1>Modifier le Parent</h1>
                                    <form action="{{ route('parents.update', $parent->id) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group">
                                            <label for="nom">Nom du tuteur</label>
                                            <input type="text" name="nom" id="nom" class="form-control" value="{{ $parent->nom }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="prenom">Prénom du tuteur</label>
                                            <input type="text" name="prenom" id="prenom" class="form-control" value="{{ $parent->prenom }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="relation">Relation</label>
                                            <input type="text" name="relation" id="relation" class="form-control" value="{{ $parent->relation }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="date_naissance">Date de naissance</label>
                                            <input type="date" name="date_naissance" id="date_naissance" class="form-control" value="{{ $parent->date_naissance }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="lieu_naissance">Lieu de naissance</label>
                                            <input type="text" name="lieu_naissance" id="lieu_naissance" class="form-control" value="{{ $parent->lieu_naissance }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="sexe">Sexe (homme ou femme)</label>
                                            <select name="sexe" id="sexe" class="form-control" required>
                                                <option value="homme" {{ $parent->sexe === 'homme' ? 'selected' : '' }}>Homme</option>
                                                <option value="femme" {{ $parent->sexe === 'femme' ? 'selected' : '' }}>Femme</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="adresse">Adresse</label>
                                            <input type="text" name="adresse" id="adresse" class="form-control" value="{{ $parent->adresse }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" name="email" id="email" class="form-control" value="{{ $parent->email }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="tel1">Téléphone 1</label>
                                            <input type="text" name="tel1" id="tel1" class="form-control" value="{{ $parent->tel1 }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="tel2">Téléphone 2 (optionnel)</label>
                                            <input type="text" name="tel2" id="tel2" class="form-control" value="{{ $parent->tel2 }}">
                                        </div>
                                        <button type="submit" class="btn btn-primary">Enregistrer les modifications</button>
                                        <a href="{{ route('parents.index') }}" class="btn btn-secondary">Annuler</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
