<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employé extends Model
{
    use HasFactory;
    protected $fillable=['nom','prenom','sexe','date','departement_id'];
}
