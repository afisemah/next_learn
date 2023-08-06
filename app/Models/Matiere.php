<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Matiere extends Model
{
    protected $fillable = [
        'nom_fr',
        'nom_ar',
        'coefficient',
        'niveau_id', // Use the actual foreign key for niveau
        'session_id', // Use the actual foreign key for session
    ];

    // For example, if you have relationships with other models, define them here:
    // For instance, if a Matiere belongs to a Niveau and Session, you can define the relationships like this:

    // Define the belongsTo relationship with Niveau model
    public function niveau()
    {
        return $this->belongsTo(Niveau::class, 'niveau_id');
    }

    // Define the belongsTo relationship with Session model
    public function session()
    {
        return $this->belongsTo(SessionsScolaires::class, 'session_id');
    }
}
