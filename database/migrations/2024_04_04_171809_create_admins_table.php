<?php

use App\Models\Admin;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    
    public function up(): void
    {
<<<<<<< HEAD
        Schema::create('admins', function (Blueprint $table) {
            $table->uuid('id')->primary();

=======
        Schema::create('admin', function (Blueprint $table) {
            $table->id();
      
>>>>>>> 0c8e03324c42c119a3b603d990e4279d03bea218
            $table->string('email')->unique();
            $table->string('username')->unique();
            $table->string('profile_photo')->nullable();
            $table->string('password')->nullable();

            $table->timestamps();
        });
        
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admin');
    }
};
