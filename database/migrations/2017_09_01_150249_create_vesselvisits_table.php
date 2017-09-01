<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVesselvisitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vesselvisits', function (Blueprint $table) {
            $table->increments('idvesselvisits');
            $table->string('visits',100);
            $table->string('voyage',100);
            $table->string('vesselname',500);
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
        Schema::dropIfExists('vesselvisits');
    }
}
