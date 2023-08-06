@extends('layouts.layout')

@section('content')

<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="container">
            <div class="row" id="content-wrapper">
                <div class="col-xs-12">
                    
                    <br>
                    <div class="row">
                        <div class="col-sm-12">
                            <h1>Edit Punition: {{ $punition->nom }}</h1>
                            <form action="{{ route('punitions.update', $punition->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="inputText">Punition Name</label>
                                    <input class="form-control" id="inputText" value="{{ $punition->nom }}" type="text" name="nom" required>
                                </div>
                                <div class="form-group">
                                    <label for="inputDescription">Punition Description</label>
                                    <textarea class="form-control" id="inputDescription" name="description" rows="3">{{ $punition->description }}</textarea>
                                </div>
                                <br>
                                <button type="submit" class="btn btn-primary">Save Changes</button>
                                <a href="{{ route('punitions.index') }}" class="btn btn-primary">Cancel</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
