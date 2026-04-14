<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;  

class Channel extends Model
{

    protected $fillable = ['name', 'description', 'creator_id'];

    public function user()
    {
        return $this->belongsTo(User::class, 'creator_id');
    }

    public function creator(): BelongsTo
    {
        return $this->belongsTo(Creator::class);
    }

    public function videos(): HasMany
    {
        return $this->hasMany(Video::class);
    }   
}
