<!-- resources/views/matieres/index.blade.php -->
@extends('layouts.layout')

@section('content')

<div class="container">
    <div class="d-flex justify-content-center mx-auto gap-3">
        <div class="col-lg-4 col-md-6">
            <div class="mt-3">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#basicModal">
                    Ajouter une matiere
                </button>
            </div>
        </div>
    </div>
    <div class="page-header page-header-with-buttons">
        <h1 class="pull-left">
            <i class="fa fa-user"></i> <span>
                <h1>Liste des matieres</h1>

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

                <form model="classesmodel" accept-charset="UTF-8" class="form" style="margin-bottom: 0;" action="{{ route('matieres.store') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="box">
                            <div class="box-content">
                                <div class="fmb-3">
                                    <label for="nom_fr" class="form-label">Nom (Français)</label>
                                    <input type="text" name="nom_fr" id="nom_fr" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label for="nom_ar" class="form-label">Nom (Arabe)</label>
                                    <input type="text" name="nom_ar" id="nom_ar" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label for="coefficient" class="form-label">Coefficient</label>
                                    <input type="number" name="coefficient" id="coefficient" class="form-control" required>
                                </div>
                                <div class="mb-3">
                                    <label for="niveau" class="form-label">Niveau</label>
                                    <select name="niveau_id" id="niveau" class="form-control" required>
                                        <option value="">Select Niveau</option>
                                        @foreach($niveaux as $niveau)
                                        <option value="{{ $niveau->id }}">{{ $niveau->reference_numerique }} : {{ $niveau->reference_alphabetique }} </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="session" class="form-label">Session</label>
                                    <select name="session_id" id="session" class="form-control" required>
                                        <option value="">Select Session</option>
                                        @foreach($sessions as $session)
                                        <option value="{{ $session->id }}">{{ $session->titre }}</option>
                                        @endforeach
                                    </select>
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
                <th>Nom (Français)</th>
                <th>Nom (Arabe)</th>
                <th>Coefficient</th>
                <th>Niveau</th>
                <th>Session</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($matieres as $matiere)
            <tr>
                <td>{{ $matiere->nom_fr }}</td>
                <td class="text-end">{{ $matiere->nom_ar }}</td>
                <td>{{ $matiere->coefficient }}</td>
                <td>
                    {{ $matiere->niveau->reference_numerique }} : {{ $matiere->niveau->reference_alphabetique }}
                </td>
                <td>{{ $matiere->session->titre }}</td>
                <td>
                    <a href="{{ route('matieres.edit', $matiere->id) }}">
                        <button type="button" class="btn btn-icon btn-warning">
                            <span class="tf-icons bx bx-edit"></span>
                        </button>
                    </a>
                    <form action="{{ route('matieres.destroy', $matiere->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-icon btn-secondary" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette matière ?')">
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