<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('product_type_id');
            $table->foreignId('producer_id');
            $table->foreignId('processor_id');
            $table->foreignId('ram_id');
            $table->foreignId('screen_diagonal_id');
            $table->foreignId('color_id');
            $table->foreignId('graphic_id');
            $table->integer('price');
            $table->integer('promo_price')->default(0);
            $table->char('code');
            $table->integer('stock');
            $table->char('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product');
    }
};
