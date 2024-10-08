<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('chapters', function (Blueprint $table) {
            $table->id();
            $table->string('Title');
            $table->string('Description', 1000);
            $table->string('Chapter_file')->nullable();

            //*inicio da chave estrangeira
            $table->unsignedBigInteger('id_course');
            $table->foreign('id_course')->references('id')->on('courses');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('chapters');
    }
};
