<?php

// database/migrations/{timestamp}_create_sessions_scolaires_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSessionsScolairesTable extends Migration
{
    public function up()
    {
        Schema::create('sessions_scolaires', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->date('date_debut');
            $table->date('date_fin');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('sessions_scolaires');
    }
}
