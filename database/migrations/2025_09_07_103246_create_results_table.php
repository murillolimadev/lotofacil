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
        Schema::create('results', function (Blueprint $table) {
            $table->id();
            $table->string('01')->nullable();
            $table->string('02')->nullable();
            $table->string('03')->nullable();
            $table->string('04')->nullable();
            $table->string('05')->nullable();
            $table->string('06')->nullable();
            $table->string('07')->nullable();
            $table->string('08')->nullable();
            $table->string('09')->nullable();
            $table->string('10')->nullable();
            $table->string('11')->nullable();
            $table->string('12')->nullable();
            $table->string('13')->nullable();
            $table->string('14')->nullable();
            $table->string('15')->nullable();
            $table->string('16')->nullable();
            $table->string('17')->nullable();
            $table->string('18')->nullable();
            $table->string('19')->nullable();
            $table->string('20')->nullable();
            $table->string('21')->nullable();
            $table->string('22')->nullable();
            $table->string('23')->nullable();
            $table->string('24')->nullable();
            $table->string('25')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('results');
    }
};
