<?php

use Illuminate\Support\Facades\Schema;
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
            $table->bigIncrements('id');
            $table->string('codigoProducto');
            $table->bigInteger('tienda_id')->unsigned();
            $table->foreign('tienda_id')->references('id')->on('tiendas')->onDelete('cascade');
            $table->string('nombre');
            $table->string('descripcion');
            $table->string('clasificacion');
            $table->string('cantidad');
            $table->string('precioCosto');
            $table->string('precioVenta');
            $table->string('fechaCarga');
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
        Schema::dropIfExists('productos');
    }
}
