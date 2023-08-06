<?php

// database/migrations/xxxx_xx_xx_create_punitions_table.php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePunitionsTable extends Migration
{
    public function up()
    {
        Schema::create('punitions', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('punitions');
    }
}

