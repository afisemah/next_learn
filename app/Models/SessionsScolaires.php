<?php

// app/Models/SessionsScolaires.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SessionsScolaires extends Model
{
    use HasFactory;

    protected $fillable = ['titre', 'date_debut', 'date_fin'];
}
