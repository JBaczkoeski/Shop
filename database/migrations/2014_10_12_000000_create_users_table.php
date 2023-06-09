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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->char('phone_number');
            $table->char('postcode');
            $table->string('city');
            $table->string('country');
            $table->string('address');
            $table->string('password');
            $table->tinyInteger('type')->default(0)->tinyInteger('type')->default(0);
            /* Users: 0=>User, 1=>Admin, 2=>warehouse */
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
