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
        $table->string('fname')->nullable();
        $table->string('lname')->nullable();
        $table->string('email')->unique();
        $table->string('username')->nullable();
        $table->string('year')->nullable();
        $table->string('course')->nullable();
        $table->string('profile_photo')->nullable();
        $table->string('password')->nullable();
        $table->boolean('is_online')->default(false);
        $table->timestamp('last_online_at')->nullable();
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
