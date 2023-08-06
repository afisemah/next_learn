<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModulesPedagogiquesTable extends Migration
{
    public function up()
    {
        Schema::create('modules_pedagogiques', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->decimal('coeff', 5, 2);
            $table->text('description');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('modules_pedagogiques');
    }
}
