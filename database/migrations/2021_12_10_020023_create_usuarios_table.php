<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            
            $table->id();
            $table->string('usuario', 16);
            $table->string('clave', 64);
            $table->binary('foto');
            $table->biginteger('rol_id')->unsigned();
            $table->biginteger('persona_id')->unsigned();
            $table->boolean('estado');
            $table->timestamps();

            $table->foreign('rol_id')->references('id')->on('rols');
            $table->foreign('persona_id')->references('id')->on('personas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');
    }
}
