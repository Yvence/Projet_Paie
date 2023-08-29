<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Poste extends Model
{
    use HasFactory;
    protected $fillable=['nom','service_id'];

    /**
     * Get the service for the blog post.
     */
    public function service(): BelongsTo
    {
        return $this->belongsTo(Service::class);
    }

}
