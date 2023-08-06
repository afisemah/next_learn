<?php
// database/migrations/2023_07_XX_xxxxxx_rename_text_to_nom_in_classes_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB; // Import the DB facade


class RenameTextToNomInClassesTable extends Migration
{
    public function up()
    {
        // Add a new 'nom' column
        Schema::table('classes', function (Blueprint $table) {
            $table->string('nom')->after('niveau_id');
        });

        // Copy data from 'text' column to 'nom' column
        DB::table('classes')->update(['nom' => DB::raw('`text`')]);

        // Remove the old 'text' column
        Schema::table('classes', function (Blueprint $table) {
            $table->dropColumn('text');
        });
    }

    public function down()
    {
        // Reverse the migration if needed
        Schema::table('classes', function (Blueprint $table) {
            $table->string('text')->after('niveau_id');
        });

        DB::table('classes')->update(['text' => DB::raw('`nom`')]);

        Schema::table('classes', function (Blueprint $table) {
            $table->dropColumn('nom');
        });
    }
}
