<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalAvant extends Model
{
    use HasFactory;
    protected $fillable=['avantage_id','fiche_id'];
}
