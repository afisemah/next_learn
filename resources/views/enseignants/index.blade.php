<!-- resources/views/enseignants/index.blade.php -->
@extends('layouts.layout')

@section('content')
<div class="container">
    <div class="d-flex justify-content-center mx-auto gap-3">
        <div class="col-lg-4 col-md-6">
            <div class="mt-3">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#basicModal">
                    Ajouter un enseignant
                </button>
            </div>
        </div>
    </div>
    <div class="page-header page-header-with-buttons">
        <h1 class="pull-left">
            <i class="fa fa-user"></i> <span>
                <h1>Liste des enseignants</h1>

            </span>
        </h1>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="basicModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel1">Ajouter un enseignant</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form model="classesmodel" accept-charset="UTF-8" class="form" style="margin-bottom: 0;" action="{{ route('enseignants.store') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="box">
                            <div class="box-content">

                                <div class="mb-3">
                                    <label for="prenom" class="form-label">Prénom</label>
                                    <input type="text" class="form-control" id="prenom" name="prenom" required>
                                </div>
                                <div class="mb-3">
                                    <label for="nom" class="form-label">Nom</label>
                                    <input type="text" class="form-control" id="nom" name="nom" required>
                                </div>
                                <div class="mb-3">
                                    <label for="date_naissance" class="form-label">Date de naissance</label>
                                    <input type="date" class="form-control" id="date_naissance" name="date_naissance" required>
                                </div>
                                <div class="mb-3">
                                    <label for="lieu_naissance" class="form-label">Lieu de naissance</label>
                                    <input type="text" class="form-control" id="lieu_naissance" name="lieu_naissance" required>
                                </div>
                                <div class="mb-3">
                                    <label for="sexe" class="form-label">Sexe</label>
                                    <select class="form-control" id="sexe" name="sexe" required>
                                        <option value="M">Masculin</option>
                                        <option value="F">Féminin</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="type_contrat" class="form-label">Type de contrat</label>
                                    <select class="form-control" id="type_contrat" name="type_contrat" required>
                                        <option value="permanent">Permanent</option>
                                        <option value="non_permanent">Non permanent</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="specialite" class="form-label">Spécialité</label>
                                    <input type="text" class="form-control" id="specialite" name="specialite">
                                </div>
                                <div class="mb-3">
                                    <label for="telephone" class="form-label">Téléphone</label>
                                    <input type="tel" class="form-control" id="telephone" name="telephone">
                                </div>
                                <div class="mb-3">
                                    <label for="adresse" class="form-label">Adresse</label>
                                    <textarea class="form-control" id="adresse" name="adresse" rows="3"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" name="email">
                                </div>
                                <div class="mb-3">
                                    <label for="login" class="form-label">Login</label>
                                    <input type="text" class="form-control" id="login" name="login">
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Mot de passe</label>
                                    <input type="password" class="form-control" id="password" name="password">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                            Annuler
                        </button>
                        <button type="submit" class="btn btn-primary">Enregistrer</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <table class="table">
        <thead>
            <tr>
                <th>Nom Prénom </th>
                <th>Type de contrat</th>
                <th>Spécialité</th>
                <th>Téléphone</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($enseignants as $enseignant)
            <tr>
                <td>{{ $enseignant->nom }} {{ $enseignant->prenom }}</td>
                <td>
                    @if($enseignant->type_contrat === 'permanent')
                    Permanent
                    @elseif($enseignant->type_contrat === 'non_permanent')
                    Nom permanent
                    @endif
                </td>

                <td>{{ $enseignant->specialite }}</td>
                <td>{{ $enseignant->telephone }}</td>
                <td>{{ $enseignant->email }}</td>
                <td>
                    <a href="{{ route('enseignants.show', $enseignant->id) }}">
                        <button type="button" class="btn btn-icon btn-primary">
                            <span class="tf-icons bx bx-show"></span>
                        </button>
                    </a>
                    <a href="{{ route('enseignants.edit', $enseignant->id) }}">
                        <button type="button" class="btn btn-icon btn-warning">
                            <span class="tf-icons bx bx-edit"></span>
                        </button>
                    </a>
                    <form action="{{ route('enseignants.destroy', $enseignant->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-icon btn-secondary" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet enseignant ?')">
                            <span class="tf-icons bx bx-trash"></span>
                        </button>
                        </button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection