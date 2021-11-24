<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAngajatiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('angajati', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nume', 20);
            $table->string('prenume', 20);
            $table->unsignedBigInteger('id_departament');
            $table->foreign('id_departament')->references('id')->on('departamente');
            $table->string('adresa', 40);
            $table->string('telefon');
            $table->string('email', 20);
            $table->integer('salariu');
            $table->string('functie', 20);
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
        Schema::dropIfExists('angajati');
    }
}
