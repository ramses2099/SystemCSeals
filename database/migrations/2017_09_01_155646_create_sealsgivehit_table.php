<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSealsgivehitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sealsgivehit', function (Blueprint $table) {
            $table->increments('idsealsgivehit');
            $table->integer('idbox');
            $table->integer('idsealsprocess');
            $table->integer('idvesselvisits');
            $table->integer('qtygive');
            $table->string('employeecode',30);
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
        Schema::dropIfExists('sealsgivehit');
    }
}
