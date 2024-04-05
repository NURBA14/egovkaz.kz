<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Region extends Model
{
    use HasFactory;


    public function autos(): HasMany
    {
        return $this->hasMany(Auto::class);
    }

    public function properties(): HasMany
    {
        return $this->hasMany(Property::class);
    }
}
