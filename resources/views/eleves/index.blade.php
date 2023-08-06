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
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addEleveModal">
                Ajouter un Élève
            </button>
            <div class="btn-group" id="dropdown-icon-demo">
                <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bx bx-menu"></i> plus
                </button>
                <ul class="dropdown-menu">
                    <li>
                        <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">
                            <i class="bx bx-chevron-right scaleX-n1-rtl"></i> Élèves</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="addEleveModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel1">Ajouter un Élève</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form action="{{ route('eleves.store') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="box">
                            <div class="box-content">
                                <div class="form-group">
                                    <label for="nom">Nom de l'élève</label>
                                    <input type="text" name="nom" id="nom" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="prenom">Prénom de l'élève</label>
                                    <input type="text" name="prenom" id="prenom" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="nom_arabe">Nom de l'élève en arabe</label>
                                    <input type="text" name="nom_arabe" id="nom_arabe" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="prenom_arabe">Prénom de l'élève en arabe</label>
                                    <input type="text" name="prenom_arabe" id="prenom_arabe" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="date_naissance">Date de naissance</label>
                                    <input type="date" name="date_naissance" id="date_naissance" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="lieu_naissance">Lieu de naissance</label>
                                    <input type="text" name="lieu_naissance" id="lieu_naissance" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="sexe">Sexe</label>
                                    <select name="sexe" id="sexe" class="form-control" required>
                                        <option value="garcon">Garçon</option>
                                        <option value="fille">Fille</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="adresse">Adresse</label>
                                    <input type="text" name="adresse" id="adresse" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="pays">Pays</label>
                                    <input type="text" name="pays" id="pays" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="classe_id">Classe</label>
                                    <select name="classe_id" id="classe_id" class="form-control" required>
                                        @foreach($classes as $classe)
                                        <option value="{{ $classe->id }}">{{ $classe->nom }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="parent_id">Parent</label>
                                    <select name="parent_id" id="parent_id" class="form-control" required>
                                        <option value="">Select Parent</option>
                                        @foreach($parents as $parent)
                                        <option value="{{ $parent->id }}">{{ $parent->nom }} {{ $parent->prenom }}</option>
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
</div>

<div class="page-header page-header-with-buttons">
    <h1 class="pull-left">
        <i class="fa fa-user"></i> <span>Liste des Élèves</span>
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
                                                <th>Nom et Prénom</th>
                                                <th class="text-end">الإسم واللقب</th>
                                                <th>Classe</th>
                                                <th>Parent</th> 
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($eleves as $eleve)
                                            <tr role="row" class="odd">
                                                <td>{{ $eleve->nom }} <strong> {{ $eleve->prenom }}</strong></td>
                                                <td class="text-end"><strong>{{ $eleve->prenom_arabe }} </strong>{{ $eleve->nom_arabe }}</td>
                                                <td>{{ $eleve->classe->nom }}</td>

                                                <td>{{ $eleve->parent->nom }} {{ $eleve->parent->prenom }} : {{ $eleve->parent->tel1 }}</td> <!-- Display the parent's name -->
                                                <td>
                                                    <a href="{{ route('eleves.show', $eleve->id) }}">
                                                        <button type="button" class="btn btn-icon btn-info">
                                                            <span class="tf-icons bx bx-show"></span>
                                                        </button>
                                                    </a>
                                                    <a href="{{ route('eleves.edit', $eleve->id) }}">
                                                        <button type="button" class="btn btn-icon btn-warning">
                                                            <span class="tf-icons bx bx-edit"></span>
                                                        </button>
                                                    </a>
                                                    <a target="_blank" href="{{ route('eleves.fichefr', $eleve->id) }}" class="btn btn-warning">
                                                    Fiche de présence
                                                    </a>
                                                    <a target="_blank" href="{{ route('eleves.fichear', $eleve->id) }}" class="btn btn-warning">
                                                    شهادة حضور
                                                    </a>
                                                    <form action="{{ route('eleves.destroy', $eleve->id) }}" method="POST" class="d-inline">
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