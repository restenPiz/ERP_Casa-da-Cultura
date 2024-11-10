<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('values', function (Blueprint $table) {
            $table->id();
            $table->string('First')->nullable();
            $table->string('Second')->nullable();
            $table->string('Third')->nullable();

            //*Inicio das chaves estrangeiras
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')->references('id')->on('users');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('values');
    }
};
