<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('Surname')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->date('Date_of_birth')->nullable();
            $table->string('bi')->nullable();
            $table->string('place')->nullable();
            $table->string('contact', 9)->nullable();
            $table->string('user_type')->nullable();
            $table->string('upload_file')->nullable();
            $table->string('function')->nullable();

            //*Inicio da coluna status
            $table->string('status')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};