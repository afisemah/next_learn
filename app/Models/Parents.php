<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parents extends Model
{
    protected $fillable = [
        'nom', 'prenom', 'relation', 'date_naissance', 'lieu_naissance', 'sexe', 'adresse', 'email', 'tel1', 'tel2'
    ];

    // Définir les règles de validation pour les attributs
    public static $rules = [
        'nom' => 'required|string|max:255',
        'prenom' => 'required|string|max:255',
        'relation' => 'required|string|max:255',
        'date_naissance' => 'nullable|date',
        'lieu_naissance' => 'nullable|string|max:255',
        'sexe' => 'required|in:homme,femme',
        'adresse' => 'nullable|string|max:255',
        'email' => 'nullable|email|max:255',
        'tel1' => 'nullable|string|max:255',
        'tel2' => 'nullable|string|max:255',
    ];
}