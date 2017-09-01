<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBoxsequenceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boxsequence', function (Blueprint $table) {
            $table->increments('idboxsequence');           
            $table->integer('idbox');
            $table->integer('boxsequence');
            $table->integer('serialnodesde');
            $table->integer('serialnohasta');
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
        Schema::dropIfExists('boxsequence');
    }
}
