<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            
            $table->id();
            $table->string('producto', 50);
            $table->string('descripcion', 250);
            $table->biginteger('marca_id')->unsigned();
            $table->biginteger('categoria_id')->unsigned();
            $table->decimal('precio', 8, 2);
            $table->integer('stock');
            $table->biginteger('user_add')->unsigned();
            $table->boolean('estado');
            $table->timestamps();
            
            $table->foreign('marca_id')->references('id')->on('marcas');
            $table->foreign('categoria_id')->references('id')->on('categorias');
            $table->foreign('user_add')->references('id')->on('usuarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
