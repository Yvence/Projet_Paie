<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employe extends Model
{
    use HasFactory;
    protected $fillable=['nom','prenom','telephone','date_naissance','matricule','email'];

    public function postes(){
        return $this->belongsToMany(Poste::class);
    }
    
}
