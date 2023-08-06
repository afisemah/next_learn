<!-- resources/views/niveaux/edit.blade.php -->

@extends('layouts.layout')

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="container">
            <div class="row" id="content-wrapper">
                <div class="col-xs-12">
                    <div class="d-flex justify-content-center mx-auto gap-3">
                        <!-- Default Modal -->
                        <div class="col-lg-4 col-md-6">
                            <div class="mt-3">
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
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-12">
                            <h1>Modifier Niveau : {{ $niveau->reference_alphabetique }}</h1>
                            <form action="{{ route('niveaux.update', $niveau->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="inputText">Référence Alphabetique</label>
                                    <input class="form-control" id="inputText" value="{{ $niveau->reference_alphabetique }}" type="text" name="reference_alphabetique" required="required">
                                </div>
                                <div class="form-group">
                                    <label for="inputText">Référence Numérique</label>
                                    <input class="form-control" id="inputText" value="{{ $niveau->reference_numerique }}" type="number" name="reference_numerique" required="required">
                                </div>
                                <div class="form-group">
                                    <label for="inputTextArea">Description</label>
                                    <textarea class="form-control" id="inputTextArea" rows="3" name="description">{{ $niveau->description }}</textarea>
                                </div>
                                <br>
                                <button type="submit" class="btn btn-primary">Enregistrer modification</button>
                                <a href="{{ route('niveaux.index') }}" class="btn btn-primary">Annuler modification</a>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    @endsection