<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTipoverticieTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipoverticie', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tipoverticie',45);
            $table->boolean('manobravel');
            $table->string('iconeComTensao',150);
            $table->string('iconeSemTensao',150);
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
        Schema::dropIfExists('tipoverticie');
    }
}
