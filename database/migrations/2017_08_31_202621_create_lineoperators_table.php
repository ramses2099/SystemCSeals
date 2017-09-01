<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLineoperatorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lineoperators', function (Blueprint $table) {
            $table->increments('idlineoperators');
            $table->string('codigo',100);
            $table->string('nombre',800);
            $table->string('scaccode',100);
            $table->string('biccode',100);
            $table->string('contactname',800);
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
        Schema::dropIfExists('lineoperators');
    }
}
