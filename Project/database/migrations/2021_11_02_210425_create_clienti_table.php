<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clienti', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nume', 20);
            $table->string('prenume', 20);
            $table->string('email', 50);
            $table->string('adresa', 40);
            $table->string('telefon');
            $table->unsignedBigInteger('id_serviciu');
            $table->foreign('id_serviciu')->references('id')->on('servicii');
            $table->date('start_date');
            $table->date('durata_min');
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
        Schema::dropIfExists('clienti');
    }
}
