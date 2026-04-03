<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Creator extends Model
{
    public function channel()
    {
        return $this->hasOne(Channel::class);
    }
}
