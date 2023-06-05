<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class processor extends Model
{
    use HasFactory;

    protected $fillable=[
        'processor',
        'processor_type'
    ];

    public function product(): HasMany
    {
        return $this->hasMany(Product::class, 'processor_id', 'id');
    }
    public function processor_type() : BelongsTo
    {
        return $this->belongsTo(procesor_type::class);
    }
}
