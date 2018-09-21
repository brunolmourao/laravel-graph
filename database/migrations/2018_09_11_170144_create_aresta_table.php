<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArestaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aresta', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',45);
            $table->boolean('tensao');
            $table->boolean('exibenome');
            $table->unsignedInteger('verticie1_id');
            $table->unsignedInteger('verticie2_id');
            $table->timestamps();

            $table->foreign('verticie1_id')->references('id')->on('verticie');
            $table->foreign('verticie2_id')->references('id')->on('verticie');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('aresta', function (Blueprint $table) {
            $table->dropForeign(['verticie1_id']);
            $table->dropForeign(['verticie2_id']);
        });
        Schema::dropIfExists('aresta');
    }
}
