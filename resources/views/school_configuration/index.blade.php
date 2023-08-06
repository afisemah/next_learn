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

<div class="page-header page-header-with-buttons">
    <h1 class="pull-left">
        <i class="fa fa-cog"></i> <span>Les infomations de l'école</span>
    </h1>
</div>

<div class="row">
    <div class="col-sm-12">
        <div class="box bordered-box orange-border" style="margin-bottom: 0;">
            <div class="box-content box-no-padding">
                <form action="{{ route('school-configuration.update', $configuration) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="box">
                        <div class="box-content">

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card mb-4">
                                        <div class="card-body">
                                            <div class="card mb-3">
                                                <div class="row g-0">
                                                    <div class="col-md-4">
                                                        @if($configuration->logo)
                                                        <img class="card-img card-img-left" src="{{ asset('logos/'.$configuration->logo) }}" alt="Card image" />
                                                        @else
                                                        <p>Aucun logo actuellement</p>
                                                        @endif
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="card-body">
                                                            <div class="form-floating">
                                                                <div class="form-group">
                                                                    <label for="nom_complet_fr">Nom Complet (Français)</label>
                                                                    <input type="text" name="nom_complet_fr" id="nom_complet_fr" class="form-control" value="{{ $configuration->nom_complet_fr }}" required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="nom_complet_ar">Nom Complet (Arabe)</label>
                                                                    <input type="text" name="nom_complet_ar" id="nom_complet_ar" class="form-control" value="{{ $configuration->nom_complet_ar }}" required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="logo">Changer le logo</label>
                                                                    <input type="file" name="logo" id="logo" class="form-control" accept="image/*">
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card mb-4">
                                        <div class="card-body">
                                            <div class="card mb-3">
                                                <div class="row g-0">
                                                    <div class="form-group">
                                                        <label for="email">Email</label>
                                                        <input type="email" name="email" id="email" class="form-control" value="{{ $configuration->email }}" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="telephone">Téléphone</label>
                                                        <input type="text" name="telephone" id="telephone" class="form-control" value="{{ $configuration->telephone }}" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="adresse_complet">Adresse</label>
                                                        <input type="text" name="adresse_complet" id="adresse_complet" class="form-control" value="{{ $configuration->adresse_complet }}" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="gouvernorat">Gouvernorat</label>
                                                        <input type="text" name="gouvernorat" id="gouvernorat" class="form-control" value="{{ $configuration->gouvernorat }}" required>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <!-- Horizontal -->
                                <div class="row mb-5">
                                        <div class="card mb-3">
                                        <button type="submit" class="btn btn-primary">Enregistrer les modifications</button>
                                        </div>
                                </div>
                                <!--/ Horizontal -->
                            </div>
                        </div>
                        <!-- Example: -->
                    </div>
            </div>
            </form>
        </div>
    </div>
</div>
</div>
</div>
</div>
@endsection