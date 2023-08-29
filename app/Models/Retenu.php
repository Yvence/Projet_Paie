<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Retenu extends Model
{
    use HasFactory;
    protected $fillable=['nom','valeur','type_retenu'];

    public function fiches(){
        return $this->belongsToMany(Fiche::class);
    }
    public function contrats(){
        return $this->belongsToMany(Contrat::class);
    }
}
