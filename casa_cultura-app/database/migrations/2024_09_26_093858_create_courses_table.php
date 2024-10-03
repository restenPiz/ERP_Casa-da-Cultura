<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    public function up(): void
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('Course_name');
            $table->string('Description', 1000)->nullable();
            $table->string('Upload_file')->nullable();
            $table->string('Upload_video')->nullable();
            $table->integer('Price');
            $table->string('Goals', 1000)->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
