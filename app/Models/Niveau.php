<?php

// app/Models/Niveau.php

// app/Models/Niveau.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Niveau extends Model
{
    use HasFactory;

    protected $table = 'niveaux';

    protected $fillable = ['reference_alphabetique', 'reference_numerique', 'description'];
}
