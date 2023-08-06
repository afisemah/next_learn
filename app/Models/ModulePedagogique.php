<?php
// app/Models/ModulePedagogique.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModulePedagogique extends Model
{
    use HasFactory;

    protected $table = 'modules_pedagogiques';

    protected $fillable = ['nom', 'coeff', 'description'];
}
