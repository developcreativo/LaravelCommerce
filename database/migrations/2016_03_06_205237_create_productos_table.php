<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');

            $table->integer('categoria_id')->unsigned();
            $table->foreign('categoria_id')->references('id')->on('categorias');

            $table->integer('tipo_id')->unsigned();
            $table->foreign('tipo_id')->references('id')->on('tipos');

            $table->integer('marca_id')->unsigned()->nullable();
            $table->foreign('marca_id')->references('id')->on('marcas');

            $table->string('titulo_es');
            $table->string('titulo_en');
            $table->string('titulo_br');
            $table->longText('descripcion_es');
            $table->longText('descripcion_en');
            $table->longText('descripcion_br');

            $table->integer('moneda_id')->unsigned()->nullable();
            $table->foreign('moneda_id')->references('id')->on('monedas');

            $table->double('precio', 15, 2)->nullable();
            $table->integer('stock')->nullable();
            $table->integer('stock_minimo')->nullable();
            $table->boolean('activo')->default(1);

            $table->string('url');
            $table->timestamps();
            $table->SoftDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('productos');
    }
}
