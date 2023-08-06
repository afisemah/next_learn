<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddParentIdToElevesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('eleves', function (Blueprint $table) {
            $table->unsignedBigInteger('parent_id')->nullable();

            // Add foreign key constraint to connect eleves.parent_id to parents.id
            $table->foreign('parent_id')->references('id')->on('parents')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('eleves', function (Blueprint $table) {
            // Drop the foreign key constraint
            $table->dropForeign(['parent_id']);
            // Drop the parent_id column
            $table->dropColumn('parent_id');
        });
    }
}
