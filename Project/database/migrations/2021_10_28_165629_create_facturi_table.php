<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facturi', function (Blueprint $table) {
            $table->id_factura();
            $table->id_client();
            $table->date('perioada-?');
            $table->id_serviciu();
            $table->pret();
            $table->enum('status',['done','in progress', 'new']);
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
        Schema::dropIfExists('facturi');
    }
}
