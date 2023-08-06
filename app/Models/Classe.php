<?php

// app/Models/Classe.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    use HasFactory;

    protected $fillable = ['niveau_id', 'nom', 'description'];

    // Define the relationship with the Niveau model
    public function niveau()
    {
        return $this->belongsTo(Niveau::class);
    }
}