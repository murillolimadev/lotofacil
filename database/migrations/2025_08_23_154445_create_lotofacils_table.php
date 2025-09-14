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
        Schema::create('lotofacils', function (Blueprint $table) {
            $table->id();
            $table->string('n01')->nullable();
            $table->string('n02')->nullable();
            $table->string('n03')->nullable();
            $table->string('n04')->nullable();
            $table->string('n05')->nullable();
            $table->string('n06')->nullable();
            $table->string('n07')->nullable();
            $table->string('n08')->nullable();
            $table->string('n09')->nullable();
            $table->string('n10')->nullable();
            $table->string('n11')->nullable();
            $table->string('n12')->nullable();
            $table->string('n13')->nullable();
            $table->string('n14')->nullable();
            $table->string('n15')->nullable();
            $table->string('n16')->nullable();
            $table->string('n17')->nullable();
            $table->string('n18')->nullable();
            $table->string('n19')->nullable();
            $table->string('n20')->nullable();
            $table->string('n21')->nullable();
            $table->string('n22')->nullable();
            $table->string('n23')->nullable();
            $table->string('n24')->nullable();
            $table->string('n25')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lotofacils');
    }
};
