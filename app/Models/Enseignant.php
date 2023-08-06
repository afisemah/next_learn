<?php

// app/Models/Enseignant.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enseignant extends Model
{
    use HasFactory;

    protected $fillable = [
        'prenom',
        'nom',
        'date_naissance',
        'lieu_naissance',
        'sexe',
        'type_contrat',
        'specialite',
        'telephone',
        'adresse',
        'email',
        'login',
        'password',
    ];
}
