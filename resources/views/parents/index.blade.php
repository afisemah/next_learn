@extends('layouts.layout')

@section('content')

@if(session('success'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    {{ session('success') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
<script>
    // Automatically close the success alert after 10 seconds
    setTimeout(function() {
        document.querySelector('.alert').classList.add('d-none');
    }, 10000);
</script>
@endif
<div class="d-flex justify-content-center mx-auto gap-3">
    <!-- Default Modal -->
    <div class="col-lg-4 col-md-6">
        <div class="mt-3">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addParentModal">
                Ajouter un Parent
            </button>
            <div class="btn-group" id="dropdown-icon-demo">
                <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bx bx-menu"></i> plus
                </button>
                <ul class="dropdown-menu">
                    <li>
                        <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">
                            <i class="bx bx-chevron-right scaleX-n1-rtl"></i> Parents</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="addParentModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel1">Ajouter un Parent</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form action="{{ route('parents.store') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="box">
                            <div class="box-content">
                                <div class="form-group">
                                    <label for="nom">Nom du tuteur</label>
                                    <input type="text" name="nom" id="nom" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="prenom">Prénom du tuteur</label>
                                    <input type="text" name="prenom" id="prenom" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="relation">Relation</label>
                                    <input type="text" name="relation" id="relation" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="date_naissance">Date de naissance</label>
                                    <input type="date" name="date_naissance" id="date_naissance" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="lieu_naissance">Lieu de naissance</label>
                                    <input type="text" name="lieu_naissance" id="lieu_naissance" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="sexe">Sexe </label>
                                    <select name="sexe" id="sexe" class="form-control" required>
                                        <option value="homme">Homme</option>
                                        <option value="femme">Femme</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="adresse">Adresse</label>
                                    <input type="text" name="adresse" id="adresse" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" id="email" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="tel1">Téléphone 1</label>
                                    <input type="text" name="tel1" id="tel1" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="tel2">Téléphone 2 (optionnel)</label>
                                    <input type="text" name="tel2" id="tel2" class="form-control">
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
</div>
<div class="page-header page-header-with-buttons">
    <h1 class="pull-left">
        <i class="fa fa-user"></i> <span>Liste des Parents</span>
    </h1>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="box bordered-box orange-border" style="margin-bottom: 0;">
            <div class="box-content box-no-padding">
                <div class="responsive-table">
                    <div class="scrollable-area">
                        <div id="table_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                            <div class="row">
                                <div class="col-sm-12">
                                    <table id="table" class="data-table-column-filter table table-bordered table-striped dataTable" style="margin-bottom: 0px; width: 1095px;" role="grid" aria-describedby="table_info">
                                        <thead>
                                            <tr role="row">
                                                <th>Nom du tuteur</th>
                                                <th>Prénom du tuteur</th>
                                                <th>Relation</th>
                                                <th>Email</th>
                                                <th>Téléphone 1</th>
                                                <th>Téléphone 2</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($parents as $parent)
                                            <tr role="row" class="odd">
                                                <td>{{ $parent->nom }}</td>
                                                <td>{{ $parent->prenom }}</td>
                                                <td>{{ $parent->relation }}</td>
                                                <td>{{ $parent->email }}</td>
                                                <td>{{ $parent->tel1 }}</td>
                                                <td>{{ $parent->tel2 }}</td>
                                                <td>
                                                    <a href="{{ route('parents.edit', $parent->id) }}">
                                                        <button type="button" class="btn btn-icon btn-warning">
                                                            <span class="tf-icons bx bx-edit"></span>
                                                        </button>
                                                    </a>
                                                    <form action="{{ route('parents.destroy', $parent->id) }}" method="POST" class="d-inline">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-icon btn-secondary">
                                                            <span class="tf-icons bx bx-trash"></span>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
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