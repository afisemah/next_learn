<!-- resources/views/eleves/edit.blade.php -->
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
                                    <h1>Modifier un Élève</h1>
                                    <form action="{{ route('eleves.update', $eleve->id) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group">
                                            <label for="nom">Nom de l'élève</label>
                                            <input type="text" name="nom" id="nom" class="form-control" value="{{ $eleve->nom }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="prenom">Prénom de l'élève</label>
                                            <input type="text" name="prenom" id="prenom" class="form-control" value="{{ $eleve->prenom }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="nom_arabe">Nom de l'élève en arabe</label>
                                            <input type="text" name="nom_arabe" id="nom_arabe" class="form-control" value="{{ $eleve->nom_arabe }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="prenom_arabe">Prénom de l'élève en arabe</label>
                                            <input type="text" name="prenom_arabe" id="prenom_arabe" class="form-control" value="{{ $eleve->prenom_arabe }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="date_naissance">Date de naissance</label>
                                            <input type="date" name="date_naissance" id="date_naissance" class="form-control" value="{{ $eleve->date_naissance }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="lieu_naissance">Lieu de naissance</label>
                                            <input type="text" name="lieu_naissance" id="lieu_naissance" class="form-control" value="{{ $eleve->lieu_naissance }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="sexe">Sexe</label>
                                            <select name="sexe" id="sexe" class="form-control" required>
                                                <option value="garcon" {{ $eleve->sexe === 'garcon' ? 'selected' : '' }}>Garçon</option>
                                                <option value="fille" {{ $eleve->sexe === 'fille' ? 'selected' : '' }}>Fille</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="adresse">Adresse</label>
                                            <input type="text" name="adresse" id="adresse" class="form-control" value="{{ $eleve->adresse }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="pays">Pays</label>
                                            <input type="text" name="pays" id="pays" class="form-control" value="{{ $eleve->pays }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="classe_id">Classe</label>
                                            <select name="classe_id" id="classe_id" class="form-control" required>
                                                @foreach($classes as $classe)
                                                    <option value="{{ $classe->id }}" {{ $eleve->classe_id === $classe->id ? 'selected' : '' }}>
                                                        {{ $classe->nom }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="parent_id">Parent</label>
                                            <select name="parent_id" id="parent_id" class="form-control" required>
                                                <option value="">Sélectionner un parent</option>
                                                @foreach($parents as $parent)
                                                    <option value="{{ $parent->id }}" {{ $eleve->parent_id === $parent->id ? 'selected' : '' }}>
                                                        {{ $parent->prenom }} {{ $parent->nom }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Enregistrer les modifications</button>
                                        <a href="{{ route('eleves.index') }}" class="btn btn-secondary">Annuler</a>
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
