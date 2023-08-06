<?php

// app/Models/Salle.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Salle extends Model
{
    protected $fillable = ['reference', 'type', 'nombre_places_max', 'description'];
}
