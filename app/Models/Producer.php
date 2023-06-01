<?php

namespace App\Models;

class Producer
{
    protected $fillable = [
        'name',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
