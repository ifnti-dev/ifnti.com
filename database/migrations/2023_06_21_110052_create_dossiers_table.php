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
        Schema::create('dossiers', function (Blueprint $table) {
            $table->id();
            $table->string('moyenne_bac')->nullable();
            $table->float('moyenne_concours')->nullable();
            $table->date('date_soumission')->nullable();
            $table->string('etat')->nullable();
            $table->bigInteger('entretien_id')->nullable();
            // $table->bigInteger('entretien_id')->nullable();
            $table->boolean('estentretenu')->nullable();
            $table->string('appreciation')->nullable();
            $table->bigInteger('candidat_id');
            $table->bigInteger('sessionconcour_id');
            $table->timestamps();
            $table->foreign('candidat_id')->references('id')->on('candidats')->onDelete('cascade');
            $table->foreign('sessionconcour_id')->references('id')->on('sessionconcours')->onDelete('cascade');
            $table->foreign('entretien_id')->references('id')->on('entretiens')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dossiers');
    }
};
