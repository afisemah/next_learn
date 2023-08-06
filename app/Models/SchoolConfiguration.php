<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SchoolConfiguration extends Model
{
    protected $table = 'school_configurations'; // Assuming the table name is 'school_configurations'
    
    protected $fillable = [
        'nom_complet_fr',
        'nom_complet_ar',
        'logo',
        'adresse_complet',
        'gouvernorat',
        'email',
        'telephone',
    ];
}