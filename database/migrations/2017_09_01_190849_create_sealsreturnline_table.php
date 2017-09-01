<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSealsreturnlineTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sealsreturnline', function (Blueprint $table) {
            $table->increments('idsealsreturnline');
            $table->integer('qtyreturn');
            $table->string('employeecode',30);
            $table->integer('idvesselvisits');
            $table->integer('idsealsprocess');
            $table->string('nota',800);
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
        Schema::dropIfExists('sealsreturnline');
    }
}
