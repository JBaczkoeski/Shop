<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class procesor_type extends Model
{
    use HasFactory;

    public function processorType(): HasMany
    {
        return $this->hasMany(processor::class);
    }
}
