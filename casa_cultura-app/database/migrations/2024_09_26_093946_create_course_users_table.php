<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up(): void
    {
        Schema::create('course_users', function (Blueprint $table) {
            $table->id();
            //*Inicio das chaves estrangeiras
            $table->foreignId('id_course')->constrained('courses')->onDelete('cascade')->onDelete('cascade');
            $table->foreignId('id_user')->constrained('users')->onDelete('cascade')->onDelete('cascade');
            $table->timestamps();

            $table->unique(['id_course', 'id_user']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('course_users');
    }
};