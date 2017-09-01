<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSealslogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sealslog', function (Blueprint $table) {
            $table->increments('idsealslog');
            $table->string('classname',800);
            $table->string('methodname',800);
            $table->string('messageerror',800);
            $table->string('stacktrace',800);
            $table->string('targetsite',800);
            $table->integer('iduser');
            $table->integer('idstaterow');
            $table->string('hostname');
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
        Schema::dropIfExists('sealslog');
    }
}
