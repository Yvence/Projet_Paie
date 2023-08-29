<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fiche extends Model
{
    use HasFactory;
    protected $fillable=['contrat_id','code','salbrute','salNet'];

    public function avantages(){
        return $this->belongsToMany(Avantage::class);
    }
    public function retenus(){
        return $this->belongsToMany(Retenu::class);
    }
}
