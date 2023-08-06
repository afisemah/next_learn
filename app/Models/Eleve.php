<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eleve extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'prenom',
        'nom_arabe',
        'prenom_arabe',
        'date_naissance',
        'lieu_naissance',
        'sexe',
        'adresse',
        'pays',
        'classe_id',
        'parent_id', // Add parent_id to the $fillable array
        'bloquee', // Add parent_id to the $fillable array
    ];

    // Define the relation between the Eleve class and the Classe class (liste des classes)
    public function classe()
    {
        return $this->belongsTo(Classe::class, 'classe_id');
    }

    // Define the relation between the Eleve class and the Parents class
    public function parent()
    {
        return $this->belongsTo(Parents::class, 'parent_id');
    }
}
