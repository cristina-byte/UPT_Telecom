<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiciiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicii', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->enum('tip', ['pachet1', 'pachet2', 'pachet3']);
            $table->enum('nivel', ['low', 'medium', 'high']);
            $table->integer('pret');
            $table->string('descriere', 30);
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
        Schema::dropIfExists('servicii');
    }
}
