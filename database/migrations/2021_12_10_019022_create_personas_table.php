<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            
            $table->id();
            $table->char('dni', 8);
            $table->string('apePater', 50);
            $table->string('apeMater', 50);
            $table->string('nombres', 100);
            $table->char('sexo', 1);
            $table->date('fec_nac');
            $table->string('correo', 320);
            $table->string('telefono', 15);
            $table->string('direccion', 250);
            $table->boolean('estado');
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
        Schema::dropIfExists('personas');
    }
}
