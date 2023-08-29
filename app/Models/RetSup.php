<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RetSup extends Model
{
    use HasFactory;
    protected $fillable=['retenu_id','fiche_id'];
}
