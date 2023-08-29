<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RetFix extends Model
{
    use HasFactory;
    protected $fillable=['retenu_id','contrat_id'];
}
