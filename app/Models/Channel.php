<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;  

class Channel extends Model
{
    public function creator(): BelongsTo
    {
        return $this->belongsTo(Creator::class);
    }

    public function videos(): HasMany
    {
        return $this->hasMany(Video::class);
    }   
}
