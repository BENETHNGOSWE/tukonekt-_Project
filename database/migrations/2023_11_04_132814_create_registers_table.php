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
        Schema::create('registers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('first_name');
            $table->string('middlename')->nullable();
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('address_line_2')->nullable();
            $table->string('city');
            $table->enum('age_group', ['0-18', '19-35', '35-above']);
            $table->string('phone_number');
            $table->enum('gender', ['male', 'female', 'others']);
            $table->boolean('email_verified')->default(false);
            $table->timestamps();
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registers');
    }
};
