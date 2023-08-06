<!-- resources/views/classes/index.blade.php -->
@extends('layouts.layout')

@section('content')
<div class="d-flex justify-content-center mx-auto gap-3">
    <div class="col-lg-4 col-md-6">
        <div class="mt-3">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#basicModal">
                Ajout Classe
            </button>
        </div>
    </div>
</div>
<div class="page-header page-header-with-buttons">
    <h1 class="pull-left">
        <i class="fa fa-user"></i> <span>Liste des classes</span>
    </h1>
</div>
<!-- Modal -->
<div class="modal fade" id="basicModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel1">Ajout Classe</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form model="classesmodel" accept-charset="UTF-8" class="form" style="margin-bottom: 0;" action="{{ route('classes.store') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="box">
                        <div class="box-content">

                            <div class="form-group">
                                <label for="niveau_id">Niveau</label>
                                <select name="niveau_id" id="niveau_id" class="form-control" required>
                                    @foreach($niveaux as $niveau)
                                    <option value="{{ $niveau->id }}">{{ $niveau->reference_numerique }} : {{ $niveau->reference_alphabetique }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="nom">Nom</label>
                                <input type="text" name="nom" id="nom" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea name="description" id="description" rows="3" class="form-control"></textarea>
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
                                                <th>Niveau</th>
                                                <th>Description</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($classes as $classe)
                                            <tr role="row" class="odd">
                                                <td>{{ $classe->nom }}</td>
                                                <td>{{ $classe->niveau->reference_numerique }} : {{ $classe->niveau->reference_alphabetique }} </td>
                                                <td>{{ $classe->description }}</td>
                                                <td>
                                                    <form action="{{ route('classes.destroy', $classe->id) }}" method="POST">
                                                        <a href="{{ route('classes.edit', $classe->id) }}">
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