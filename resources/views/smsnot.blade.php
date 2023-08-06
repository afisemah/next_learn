@extends('layouts.layout')

@section('content')
<!-- Icon container -->
<h3>SMS et Notification pour Élèves</h3>

<div class="d-flex flex-wrap" id="icons-container">
    <br>
    <div class="card icon-card cursor-pointer text-center mb-4 mx-2">
        <div class="card-body">
            <i class="bx user-circle mb-2"></i>
            <p class="icon-name text-capitalize text-truncate mb-0">Un Élève</p>
        </div>
    </div>
    <div class="card icon-card cursor-pointer text-center mb-4 mx-2">
        <div class="card-body">
            <i class="bx bxl-algolia mb-2"></i>
            <p class="icon-name text-capitalize text-truncate mb-0">Multiples Élèves d'une Classe</p>
        </div>
    </div>
    <div class="card icon-card cursor-pointer text-center mb-4 mx-2">
        <div class="card-body">
            <i class="bx bxl-audible mb-2"></i>
            <p class="icon-name text-capitalize text-truncate mb-0">Une Classe</p>
        </div>
    </div>

</div>
<h3>SMS et Notification pour Parents</h3>

<div class="d-flex flex-wrap" id="icons-container">
    <br>
    <div class="card icon-card cursor-pointer text-center mb-4 mx-2">
        <div class="card-body">
            <i class="bx bxl-adobe mb-2"></i>
            <p class="icon-name text-capitalize text-truncate mb-0">Un Parent</p>
        </div>
    </div>
    <div class="card icon-card cursor-pointer text-center mb-4 mx-2">
        <div class="card-body">
            <i class="bx bxl-algolia mb-2"></i>
            <p class="icon-name text-capitalize text-truncate mb-0">Multiples Parent</p>
        </div>
    </div>
    <div class="card icon-card cursor-pointer text-center mb-4 mx-2">
        <div class="card-body">
            <i class="bx bxl-audible mb-2"></i>
            <p class="icon-name text-capitalize text-truncate mb-0">Tous les parents</p>
        </div>
    </div>

</div>

<!-- Partie 3: SMS et Notifications pour les Enseignants -->
<h3>SMS et Notification pour Enseignants</h3>
<div class="d-flex flex-wrap" id="icons-container">
    <br>
    <div class="card icon-card cursor-pointer text-center mb-4 mx-2">
        <div class="card-body">
            <i class="bx bxl-adobe mb-2"></i>
            <p class="icon-name text-capitalize text-truncate mb-0">Un Enseignant</p>
        </div>
    </div>
    <div class="card icon-card cursor-pointer text-center mb-4 mx-2">
        <div class="card-body">
            <i class="bx bxl-algolia mb-2"></i>
            <p class="icon-name text-capitalize text-truncate mb-0">Multiples Enseignants</p>
        </div>
    </div>
    <div class="card icon-card cursor-pointer text-center mb-4 mx-2">
        <div class="card-body">
            <i class="bx bxl-audible mb-2"></i>
            <p class="icon-name text-capitalize text-truncate mb-0">Tous les Enseignants</p>
        </div>
    </div>

</div>

<!-- Partie 4: SMS et Notifications pour l'Administration -->
<h3>SMS et Notification pour Administration</h3>
<div class="d-flex flex-wrap" id="icons-container">
    <br>
    <div class="card icon-card cursor-pointer text-center mb-4 mx-2">
        <div class="card-body">
            <i class="bx bxl-adobe mb-2"></i>
            <p class="icon-name text-capitalize text-truncate mb-0">Un employés</p>
        </div>
    </div>
    <div class="card icon-card cursor-pointer text-center mb-4 mx-2">
        <div class="card-body">
            <i class="bx bxl-algolia mb-2"></i>
            <p class="icon-name text-capitalize text-truncate mb-0">Multiples employés</p>
        </div>
    </div>
    <div class="card icon-card cursor-pointer text-center mb-4 mx-2">
        <div class="card-body">
            <i class="bx bxl-audible mb-2"></i>
            <p class="icon-name text-capitalize text-truncate mb-0">Tous les employés</p>
        </div>
    </div>


</div>

@endsection