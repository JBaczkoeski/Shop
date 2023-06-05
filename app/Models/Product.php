<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Product extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'producer_id',
        'price',
        'promo_price',
        'code',
        'stock',
        'image',
        'producer_id',
        'product_type_id',
        'processor_id',
        'ram_id',
        'screen_diagonal_id',
        'color_id'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function producer(): BelongsTo
    {
        return $this->belongsTo(Producer::class);
    }

    public function productsTypes(): BelongsTo
    {
        return $this->belongsTo(ProductType::class);
    }

    public function processor(): BelongsTo
    {
        return $this->belongsTo(Processor::class);
    }

    public function graphic(): BelongsTo
    {
        return $this->belongsTo(Graphic::class);
    }

    public function ram(): BelongsTo
    {
        return $this->belongsTo(Ram::class);
    }

    public function screenDiagonal(): BelongsTo
    {
        return $this->belongsTo(ScreenDiagonal::class);
    }

    public function color(): BelongsTo
    {
        return $this->belongsTo(Color::class);
    }

}
