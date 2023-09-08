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
        Schema::create('niveaus', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('systeme');
            $table->string('annee')->nullable();
            $table->string('serie');
            $table->string('etablissement');
            $table->bigInteger('dossier_id');
            $table->timestamps();
            $table->foreign('dossier_id')->references('id')->on('dossiers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('niveaus');
    }
};
