<!-- resources/views/specialites/index.blade.php -->




@extends('layouts.layout')

@section('content')


<div class="d-flex justify-content-center mx-auto gap-3">
    <!-- Default Modal -->
    <div class="col-lg-4 col-md-6">
        <div class="mt-3">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#basicModal">
                Ajout Spécialité
            </button>



            <div class="btn-group" id="dropdown-icon-demo">
                <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bx bx-menu"></i> plus
                </button>
                <ul class="dropdown-menu">
                    <li>
                        <a href="javascript:void(0);" class="dropdown-item d-flex align-items-center">
                            <i class="bx bx-chevron-right scaleX-n1-rtl"></i>Modules pédagogiques</a>
                    </li>

                </ul>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="basicModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel1">Ajout Spécialité</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <form model="specialitymodel" accept-charset="UTF-8" class="form" style="margin-bottom: 0;" action="{{ route('specialites.store') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="box">
                            <div class="box-content">

                                <div class="form-group">
                                    <label for="inputText"> Nom Spécialité
                                    </label> <input class="form-control" id="inputText" placeholder="nom" type="text" name="nom" required="required">
                                </div>

                                <div class="form-group">
                                    <label for="inputTextArea"> Description
                                    </label>
                                    <textarea class="form-control" id="inputTextArea" placeholder="text" rows="3" name="description"></textarea>
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
        <i class="fa fa-user"></i> <span> Liste des spécialités
        </span>
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
                                                <th>Description</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($specialites as $specialite)
                                            <tr role="row" class="odd">
                                                <td>{{ $specialite->nom }}</td>
                                                <td>{{ $specialite->description }}</td>
                                                <td>
                                                    <form action="{{ route('specialites.destroy', $specialite->id) }}" method="POST">
                                                        <a href="{{ route('specialites.edit', $specialite->id) }}">
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