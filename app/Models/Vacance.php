<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacance extends Model
{
    protected $fillable = ['nom', 'date_debut', 'date_fin', 'date_envoyer_notification'];
}
