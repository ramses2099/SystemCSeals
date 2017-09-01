<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSealsgivelinedetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sealsgivelinedetails', function (Blueprint $table) {
            $table->increments('idsealsgivelinedetails');
            $table->integer('idsealsgiveline');
            $table->string('sealssequence',40);
            $table->integer('idsealsstate');
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
        Schema::dropIfExists('sealsgivelinedetails');
    }
}
