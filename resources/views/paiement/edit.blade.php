<!-- resources/views/modules/edit.blade.php -->
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
                                    <h1>Modifier le Module Pédagogique</h1>
                                    <form action="{{ route('modules.update', $module->id) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group">
                                            <label for="nom">Nom du module</label>
                                            <input type="text" name="nom" id="nom" class="form-control" value="{{ $module->nom }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="coeff">Coeff</label>
                                            <input type="number" step="0.01" name="coeff" id="coeff" class="form-control" value="{{ $module->coeff }}" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="description">Description</label>
                                            <textarea name="description" id="description" rows="5" class="form-control" required>{{ $module->description }}</textarea>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Enregistrer les modifications</button>
                                        <a href="{{ route('modules.index') }}" class="btn btn-secondary">Annuler</a>
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