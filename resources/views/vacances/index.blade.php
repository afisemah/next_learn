@extends('layouts.layout')

@section('content')
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
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
                    Ajouter Vacance
                </button>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="basicModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel1">Ajouter Vacance</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form action="{{ route('vacances.store') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="box">
                            <div class="box-content">
                                <div class="form-group">
                                    <label for="inputText">Nom de la Vacance</label>
                                    <input class="form-control" id="inputText" placeholder="Nom de la Vacance" type="text" name="nom" required>
                                </div>

                                <div class="form-group">
                                    <label for="inputDateDebut">Date de début</label>
                                    <input class="form-control" id="inputDateDebut" type="date" name="date_debut" required>
                                </div>

                                <div class="form-group">
                                    <label for="inputDateFin">Date de fin</label>
                                    <input class="form-control" id="inputDateFin" type="date" name="date_fin" required>
                                </div>

                                <div class="form-group">
                                    <label for="inputDateNotification">Date d'envoi de la notification</label>
                                    <input class="form-control" id="inputDateNotification" type="date" name="date_envoyer_notification">
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

    <div class="page-header page-header-with-buttons">
        <h1 class="pull-left">
            <i class="fa fa-user"></i> <span>Liste des Vacances</span>
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
                                                    <th>Nom</th>
                                                    <th>Date de début</th>
                                                    <th>Date de fin</th>
                                                    <th>Date d'envoi de la notification</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($vacances as $vacance)
                                                <tr role="row" class="odd">
                                                    <td>{{ $vacance->nom }}</td>
                                                    <td>{{ $vacance->date_debut }}</td>
                                                    <td>{{ $vacance->date_fin }}</td>
                                                    <td>{{ $vacance->date_envoyer_notification }}</td>
                                                    <td>
                                                        <form action="{{ route('vacances.destroy', $vacance->id) }}" method="POST">
                                                            <a href="{{ route('vacances.edit', $vacance->id) }}">
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
