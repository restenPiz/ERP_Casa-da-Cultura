<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up(): void
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->date('Date');
            $table->string('Location');
            $table->integer('Number_of_speaker');
            $table->time('Hour');
            $table->string('Description', 1000);
            $table->string('Event_picture')->nullable();
            $table->string('Price');

            //*Inicio das chaves estrangeiras
            $table->unsignedBigInteger('id_artist');
            $table->foreign('id_artist')->references('id')->on('artists');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
