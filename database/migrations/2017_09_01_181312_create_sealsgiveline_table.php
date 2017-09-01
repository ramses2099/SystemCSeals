<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSealsgivelineTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sealsgiveline', function (Blueprint $table) {
            $table->increments('idsealsgiveline');
            $table->integer('idlineoperators');
            $table->integer('idsealsprocess');
            $table->integer('idvesselvisits');
            $table->integer('qtygive');
            $table->string('employeecode',30);            
            $table->integer('idstaterow');
            $table->string('hostname',200);
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
        Schema::dropIfExists('sealsgiveline');
    }
}
