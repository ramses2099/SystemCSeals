<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSealsreturnlinedetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sealsreturnlinedetails', function (Blueprint $table) {
            $table->increments('idsealsreturnlinedetails');
            $table->integer('idsealsreturnline');
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
        Schema::dropIfExists('sealsreturnlinedetails');
    }
}
