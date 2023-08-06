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
        Schema::create('eleves', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->string('nom_arabe')->nullable();
            $table->string('prenom_arabe')->nullable();
            $table->date('date_naissance');
            $table->string('lieu_naissance');
            $table->enum('sexe', ['garcon', 'fille']);
            $table->string('adresse');
            $table->string('pays');
            $table->unsignedBigInteger('classe_id');
            $table->timestamps();
    
            $table->foreign('classe_id')->references('id')->on('classes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('eleves');
    }
};
