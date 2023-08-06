<?php

// database/migrations/YYYY_MM_DD_create_school_configurations_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchoolConfigurationsTable extends Migration
{
    public function up()
    {
        Schema::create('school_configurations', function (Blueprint $table) {
            $table->id();
            $table->string('nom_complet_fr');
            $table->string('nom_complet_ar');
            $table->string('logo')->nullable();
            $table->string('adresse_complet');
            $table->string('gouvernorat');
            $table->string('email');
            $table->string('telephone');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('school_configurations');
    }
}
