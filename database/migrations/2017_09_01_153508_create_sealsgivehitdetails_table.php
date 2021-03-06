<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSealsgivehitdetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sealsgivehitdetails', function (Blueprint $table) {
            $table->increments('idsealsgivehitdetails');
            $table->integer('idsealsgivehit');
            $table->integer('sealssequence');            
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
        Schema::dropIfExists('sealsgivehitdetails');
    }
}
