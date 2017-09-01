<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSealsreturnhitdetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sealsreturnhitdetails', function (Blueprint $table) {
            $table->increments('idsealsreturnhitdetails');
            $table->integer('idsealsreturnhit');
            $table->integer('sealssequence');
            $table->integer('idsealsstate');
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
        Schema::dropIfExists('sealsreturnhitdetails');
    }
}
