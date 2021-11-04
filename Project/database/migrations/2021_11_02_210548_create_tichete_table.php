<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicheteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tichete', function (Blueprint $table) {
           
            $table->id();
            $table->unsignedBigInteger('id_responsabil');
            $table->foreign('id_responsabil')->references('id')->on('angajati');
            $table->unsignedBigInteger('id_client');
            $table->foreign('id_client')->references('id')->on('clienti');
            $table->enum('status',['done','in progress', 'new']);
            $table->enum('urgenta',['low','medium', 'high']);
            $table->string('descriere', 100);
            $table->date('data_raportare');
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
        Schema::dropIfExists('tickets');
    }
}
