<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFkVerticie extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('verticie', function($table) {
            $table->unsignedInteger('tipoVerticie_id');
            $table->foreign('tipoVerticie_id')->references('id')->on('tipoverticie')->OnDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('verticie', function (Blueprint $table) {
            $table->dropForeign(['tipoVerticie_id']);
        });
    }
}
