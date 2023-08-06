<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnneeScolaire extends Model
{
    use HasFactory;
    protected $table = 'annees_scolaires';
    protected $fillable = ['titre', 'date_debut', 'date_fin'];
}
