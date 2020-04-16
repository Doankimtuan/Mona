<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('id_type');
            //$table->foreign('id_type')->references('id')->on('type_products');
            $table->text('description');
            $table->float('price');
            $table->float('promotion_price');
            //$table->integer('id_supplier')->unsigned();
            //$table->foreign('id_suppiler')->references('id')->on('suppliers');
            $table->string('image');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
