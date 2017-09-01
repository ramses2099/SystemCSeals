<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSealsreturnhitTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sealsreturnhit', function (Blueprint $table) {
            $table->increments('idsealsreturnhit');
            $table->integer('qtyreturn');
            $table->string('employeecode',30);
            $table->integer('idvesselvisits');
            $table->integer('idsealsprocess');
            $table->integer('serialnodesde');
            $table->integer('serialnohasta');
            $table->string('nota');
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
        Schema::dropIfExists('sealsreturnhit');
    }
}
