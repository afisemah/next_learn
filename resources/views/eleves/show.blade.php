<!-- resources/views/eleves/show.blade.php -->
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
                                    <h1>Détails de l'Élève</h1>
                                    <div class="form-group">
                                        <label for="nom">Nom de l'élève</label>
                                        <p>{{ $eleve->nom }}</p>
                                    </div>
                                    <div class="form-group">
                                        <label for="prenom">Prénom de l'élève</label>
                                        <p>{{ $eleve->prenom }}</p>
                                    </div>
                                    <div class="form-group">
                                        <label for="nom_arabe">Nom de l'élève en arabe</label>
                                        <p>{{ $eleve->nom_arabe }}</p>
                                    </div>
                                    <div class="form-group">
                                        <label for="prenom_arabe">Prénom de l'élève en arabe</label>
                                        <p>{{ $eleve->prenom_arabe }}</p>
                                    </div>
                                    <div class="form-group">
                                        <label for="date_naissance">Date de naissance</label>
                                        <p>{{ $eleve->date_naissance }}</p>
                                    </div>
                                    <div class="form-group">
                                        <label for="lieu_naissance">Lieu de naissance</label>
                                        <p>{{ $eleve->lieu_naissance }}</p>
                                    </div>
                                    <div class="form-group">
                                        <label for="sexe">Sexe</label>
                                        <p>{{ $eleve->sexe === 'garcon' ? 'Garçon' : 'Fille' }}</p>
                                    </div>
                                    <div class="form-group">
                                        <label for="adresse">Adresse</label>
                                        <p>{{ $eleve->adresse }}</p>
                                    </div>
                                    <div class="form-group">
                                        <label for="pays">Pays</label>
                                        <p>{{ $eleve->pays }}</p>
                                    </div>
                                    <div class="form-group">
                                        <label for="classe_id">Classe</label>
                                        <p>{{ $eleve->classe->nom }}</p>
                                    </div>
                                    <div class="form-group">
                                        <label for="parent_id">Parent</label>
                                        <p>{{ $eleve->parent->prenom }} {{ $eleve->parent->nom }}</p>
                                    </div>
                                    <a href="{{ route('eleves.edit', $eleve->id) }}" class="btn btn-warning">Modifier</a>
                                    <form action="{{ route('eleves.destroy', $eleve->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-secondary">Supprimer</button>
                                    </form>
                                    <a href="{{ route('eleves.index') }}" class="btn btn-secondary">Retour à la liste</a>
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