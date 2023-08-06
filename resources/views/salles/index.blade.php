<!-- resources/views/specialites/index.blade.php -->

@extends('layouts.layout')

@section('content')

 <!-- Your existing HTML content for the index page -->

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
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#basicModal">
                Ajout Salle
            </button>

            <!-- Autres boutons pour les fonctionnalités supplémentaires -->
        </div>
    </div>
    <!-- Modal -->
    <!-- Modal -->
    <div class="modal fade" id="basicModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel1">Ajout Salle</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form action="{{ route('salles.store') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="box">
                            <div class="box-content">
                                <div class="form-group">
                                    <label for="inputText">Référence de la salle</label>
                                    <input class="form-control" id="inputText" placeholder="Référence" type="text" name="reference" required>
                                </div>

                                <div class="form-group">
                                    <label for="inputSelect">Type de salle</label>
                                    <select class="form-control" id="inputSelect" name="type" required>
                                        <option value="Cours">Cours</option>
                                        <option value="Travaux pratique">Travaux pratique</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="inputNumber">Nombre de places max</label>
                                    <input class="form-control" id="inputNumber" placeholder="Nombre de places max" type="number" name="nombre_places_max" required>
                                </div>

                                <div class="form-group">
                                    <label for="inputTextArea">Description de la salle</label>
                                    <textarea class="form-control" id="inputTextArea" placeholder="Description" rows="3" name="description"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Annuler</button>
                        <button type="submit" class="btn btn-primary">Enregistrer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>

<div class="page-header page-header-with-buttons">
    <h1 class="pull-left">
        <i class="fa fa-user"></i> <span> Liste des salles </span>
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
                                                <th>Référence</th>
                                                <th>Type</th>
                                                <th>Nombre de places max</th>
                                                <th>Description</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($salles as $salle)
                                            <tr role="row" class="odd">
                                                <td>{{ $salle->reference }}</td>
                                                <td>{{ $salle->type }}</td>
                                                <td>{{ $salle->nombre_places_max }}</td>
                                                <td>{{ $salle->description }}</td>
                                                <td>
                                                    <form action="{{ route('salles.destroy', $salle->id) }}" method="POST">
                                                        <a href="{{ route('salles.edit', $salle->id) }}">
                                                            <button type="button" class="btn btn-icon btn-warning">
                                                                <span class="tf-icons bx bx-edit"></span>
                                                            </button>
                                                        </a>
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