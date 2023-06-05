<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Ram extends Model
{
    protected $fillable = [
        'name',
    ];

    public function product(): HasMany
    {
        return $this->hasMany(Product::class);
    }
}
