<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\SpecialityController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/acceuil', function () {
    return view('acceuil');
});

Route::get('/student', function () {
    return view('student');
});
Route::get('/addstudent', function () {
    return view('addstudent');
});
Route::get('/importstudent', function () {
    return view('importstudent');
});

// enseignant
Route::get('/classes', function () {
    return view('classes');
});

//Niveaux
Route::get('/niveaux', function () {
    return view('niveaux');
});

// spécialité
use App\Http\Controllers\SpecialiteController;

Route::get('/specialites', [SpecialiteController::class, 'index'])->name('specialites.index');
Route::post('/specialites', [SpecialiteController::class, 'store'])->name('specialites.store');
Route::get('/specialites/{specialite}/edit', [SpecialiteController::class, 'edit'])->name('specialites.edit');
Route::put('/specialites/{specialite}', [SpecialiteController::class, 'update'])->name('specialites.update');
Route::delete('/specialites/{specialite}', [SpecialiteController::class, 'destroy'])->name('specialites.destroy');

//niveau
use App\Http\Controllers\NiveauController;

Route::get('/niveaux', [NiveauController::class, 'index'])->name('niveaux.index');
Route::post('/niveaux', [NiveauController::class, 'store'])->name('niveaux.store');
Route::get('/niveaux/{niveau}/edit', [NiveauController::class, 'edit'])->name('niveaux.edit');
Route::put('/niveaux/{niveau}', [NiveauController::class, 'update'])->name('niveaux.update');
Route::delete('/niveaux/{niveau}', [NiveauController::class, 'destroy'])->name('niveaux.destroy');

// routes/web.php

use App\Http\Controllers\ModulePedagogiqueController;

Route::get('/modules', [ModulePedagogiqueController::class, 'index'])->name('modules.index');
Route::post('/modules', [ModulePedagogiqueController::class, 'store'])->name('modules.store');
Route::get('/modules/create', [ModulePedagogiqueController::class, 'create'])->name('modules.create');
Route::get('/modules/{module}', [ModulePedagogiqueController::class, 'show'])->name('modules.show');
Route::get('/modules/{module}/edit', [ModulePedagogiqueController::class, 'edit'])->name('modules.edit');
Route::put('/modules/{module}', [ModulePedagogiqueController::class, 'update'])->name('modules.update');
Route::delete('/modules/{module}', [ModulePedagogiqueController::class, 'destroy'])->name('modules.destroy');


// routes/web.php

use App\Http\Controllers\SessionsScolairesController;

Route::get('/sessions-scolaires', [SessionsScolairesController::class, 'index'])->name('sessions-scolaires.index');
Route::get('/sessions-scolaires/create', [SessionsScolairesController::class, 'create'])->name('sessions-scolaires.create');
Route::post('/sessions-scolaires', [SessionsScolairesController::class, 'store'])->name('sessions-scolaires.store');
Route::get('/sessions-scolaires/{session}', [SessionsScolairesController::class, 'show'])->name('sessions-scolaires.show');
Route::get('/sessions-scolaires/{session}/edit', [SessionsScolairesController::class, 'edit'])->name('sessions-scolaires.edit');
Route::put('/sessions-scolaires/{session}', [SessionsScolairesController::class, 'update'])->name('sessions-scolaires.update');
Route::delete('/sessions-scolaires/{session}', [SessionsScolairesController::class, 'destroy'])->name('sessions-scolaires.destroy');


use App\Http\Controllers\AnneeScolaireController;

Route::get('/annees-scolaires', [AnneeScolaireController::class, 'index'])->name('annees-scolaires.index');
Route::get('/annees-scolaires/create', [AnneeScolaireController::class, 'create'])->name('annees-scolaires.create');
Route::post('/annees-scolaires', [AnneeScolaireController::class, 'store'])->name('annees-scolaires.store');
Route::get('/annees-scolaires/{annee_scolaire}', [AnneeScolaireController::class, 'show'])->name('annees-scolaires.show');
Route::get('/annees-scolaires/{annee_scolaire}/edit', [AnneeScolaireController::class, 'edit'])->name('annees-scolaires.edit');
Route::put('/annees-scolaires/{annee_scolaire}', [AnneeScolaireController::class, 'update'])->name('annees-scolaires.update');
Route::delete('/annees-scolaires/{annee_scolaire}', [AnneeScolaireController::class, 'destroy'])->name('annees-scolaires.destroy');


use App\Http\Controllers\ClasseController;

Route::get('/classes', [ClasseController::class, 'index'])->name('classes.index');
Route::get('/classes/create', [ClasseController::class, 'create'])->name('classes.create');
Route::post('/classes', [ClasseController::class, 'store'])->name('classes.store');
Route::get('/classes/{classe}', [ClasseController::class, 'show'])->name('classes.show');
Route::get('/classes/{classe}/edit', [ClasseController::class, 'edit'])->name('classes.edit');
Route::put('/classes/{classe}', [ClasseController::class, 'update'])->name('classes.update');
Route::delete('/classes/{classe}', [ClasseController::class, 'destroy'])->name('classes.destroy');

use App\Http\Controllers\EnseignantController;

Route::get('/enseignant', [EnseignantController::class, 'index'])->name('enseignants.index');
Route::get('/enseignant/create', [EnseignantController::class, 'create'])->name('enseignants.create');
Route::post('/enseignant', [EnseignantController::class, 'store'])->name('enseignants.store');
Route::get('/enseignant/{enseignant}', [EnseignantController::class, 'show'])->name('enseignants.show');
Route::get('/enseignant/{enseignant}/edit', [EnseignantController::class, 'edit'])->name('enseignants.edit');
Route::put('/enseignant/{enseignant}', [EnseignantController::class, 'update'])->name('enseignants.update');
Route::delete('/enseignant/{enseignant}', [EnseignantController::class, 'destroy'])->name('enseignants.destroy');

use App\Http\Controllers\MatiereController;

Route::get('/matiere', [MatiereController::class, 'index'])->name('matieres.index');
Route::get('/matiere/create', [MatiereController::class, 'create'])->name('matieres.create');
Route::post('/matiere', [MatiereController::class, 'store'])->name('matieres.store');
Route::get('/matiere/{matiere}', [MatiereController::class, 'show'])->name('matieres.show');
Route::get('/matiere/{matiere}/edit', [MatiereController::class, 'edit'])->name('matieres.edit');
Route::put('/matiere/{matiere}', [MatiereController::class, 'update'])->name('matieres.update');
Route::delete('/matiere/{matiere}', [MatiereController::class, 'destroy'])->name('matieres.destroy');

use App\Http\Controllers\SalleController;

Route::get('/salle', [SalleController::class, 'index'])->name('salles.index');
Route::get('/salle/create', [SalleController::class, 'create'])->name('salles.create');
Route::post('/salle', [SalleController::class, 'store'])->name('salles.store');
Route::get('/salle/{salle}', [SalleController::class, 'show'])->name('salles.show');
Route::get('/salle/{salle}/edit', [SalleController::class, 'edit'])->name('salles.edit');
Route::put('/salle/{salle}', [SalleController::class, 'update'])->name('salles.update');
Route::delete('/salle/{salle}', [SalleController::class, 'destroy'])->name('salles.destroy');

use App\Http\Controllers\VacanceController;

Route::get('/vacances', [VacanceController::class, 'index'])->name('vacances.index');
Route::get('/vacances/create', [VacanceController::class, 'create'])->name('vacances.create');
Route::post('/vacances', [VacanceController::class, 'store'])->name('vacances.store');
Route::get('/vacances/{vacance}', [VacanceController::class, 'show'])->name('vacances.show');
Route::get('/vacances/{vacance}/edit', [VacanceController::class, 'edit'])->name('vacances.edit');
Route::put('/vacances/{vacance}', [VacanceController::class, 'update'])->name('vacances.update');
Route::delete('/vacances/{vacance}', [VacanceController::class, 'destroy'])->name('vacances.destroy');

use App\Http\Controllers\PunitionController;

Route::get('/punitions', [PunitionController::class, 'index'])->name('punitions.index');
Route::get('/punitions/create', [PunitionController::class, 'create'])->name('punitions.create');
Route::post('/punitions', [PunitionController::class, 'store'])->name('punitions.store');
Route::get('/punitions/{punition}', [PunitionController::class, 'show'])->name('punitions.show');
Route::get('/punitions/{punition}/edit', [PunitionController::class, 'edit'])->name('punitions.edit');
Route::put('/punitions/{punition}', [PunitionController::class, 'update'])->name('punitions.update');
Route::delete('/punitions/{punition}', [PunitionController::class, 'destroy'])->name('punitions.destroy');

use App\Http\Controllers\EleveController;
use App\Http\Controllers\PaiementController;
use App\Http\Controllers\ParentsController;

Route::get('/eleves', [EleveController::class, 'index'])->name('eleves.index');
Route::get('/eleves/create', [EleveController::class, 'create'])->name('eleves.create');
Route::post('/eleves', [EleveController::class, 'store'])->name('eleves.store');
Route::get('/eleves/{eleve}', [EleveController::class, 'show'])->name('eleves.show');
Route::get('/eleves/{eleve}/edit', [EleveController::class, 'edit'])->name('eleves.edit');
Route::put('/eleves/{eleve}', [EleveController::class, 'update'])->name('eleves.update');
Route::delete('/eleves/{eleve}', [EleveController::class, 'destroy'])->name('eleves.destroy');
Route::get('/eleves/{eleve}/fichefr', [EleveController::class, 'fichefr'])->name('eleves.fichefr');
Route::get('/eleves/{eleve}/fichear', [EleveController::class, 'fichear'])->name('eleves.fichear');


// Routes for Paiement
Route::get('/paiement', [PaiementController::class, 'index'])->name('paiement.index');
Route::get('/paiement/create', [PaiementController::class, 'create'])->name('paiement.create');
Route::post('/paiement', [PaiementController::class, 'store'])->name('paiement.store');
Route::get('/paiement/{paiement}', [PaiementController::class, 'show'])->name('paiement.show');
Route::get('/paiement/{paiement}/edit', [PaiementController::class, 'edit'])->name('paiement.edit');
Route::put('/paiement/{paiement}', [PaiementController::class, 'update'])->name('paiement.update');
Route::delete('/paiement/{paiement}', [PaiementController::class, 'destroy'])->name('paiement.destroy');

// Routes for Parents
Route::get('/parents', [ParentsController::class, 'index'])->name('parents.index');
Route::get('/parents/create', [ParentsController::class, 'create'])->name('parents.create');
Route::post('/parents', [ParentsController::class, 'store'])->name('parents.store');
Route::get('/parents/{parent}', [ParentsController::class, 'show'])->name('parents.show');
Route::get('/parents/{parent}/edit', [ParentsController::class, 'edit'])->name('parents.edit');
Route::put('/parents/{parent}', [ParentsController::class, 'update'])->name('parents.update');
Route::delete('/parents/{parent}', [ParentsController::class, 'destroy'])->name('parents.destroy');

// routes/web.php

use App\Http\Controllers\SchoolConfigurationController;

// Afficher la configuration de l'école
Route::get('/school-configuration', [SchoolConfigurationController::class, 'index'])->name('school-configuration.index');
Route::get('/school-configuration/create', [SchoolConfigurationController::class, 'create'])->name('school-configuration.create');
Route::post('/school-configuration', [SchoolConfigurationController::class, 'store'])->name('school-configuration.store');
Route::get('/school-configuration/{configuration}/edit', [SchoolConfigurationController::class, 'edit'])->name('school-configuration.edit');
Route::put('/school-configuration/{configuration}', [SchoolConfigurationController::class, 'update'])->name('school-configuration.update');
Route::delete('/school-configuration/{configuration}', [SchoolConfigurationController::class, 'destroy'])->name('school-configuration.destroy');
