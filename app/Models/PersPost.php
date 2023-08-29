<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PersPost extends Model
{
    use HasFactory;
    protected $fillable=['employe_id','poste_id'];

    public function personnel():BelongsTo
    {
        return $this->belongsTo(Employe::class);
    }

    public function poste():BelongsTo
    {
        return $this->belongsTo(Poste::class);
    }
}
