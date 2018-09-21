<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVerticieTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('verticie', function (Blueprint $table) {
            $table->increments('id');
            $table->string('icone',150);
            $table->boolean('estado');
            $table->string('nome',45);
            $table->boolean('tensao');
            $table->boolean('exibenome');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('verticie');
    }
}
