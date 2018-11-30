<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Create13375ModelResponsisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Member', function (Blueprint $table) {
            $table->increments('id');
			$table->string('nama',50)->unique();	//membuat kolom nama 
			$table->string('email', 50)->unique(); 
			$table->string('password',20); //membuat kolom password
			$table->string('macAddress',20); //membuat kolom macAddress
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
        Schema::dropIfExists('13375_model_responsis');
    }
}
