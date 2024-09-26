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
            $table->unsignedBigInteger('id_course');
            $table->foreign('id_course')->references('id')->on('courses');

            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')->references('id')->on('users');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('course_users');
    }
};