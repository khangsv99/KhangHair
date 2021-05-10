<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->increments('idPro');
            $table->unsignedInteger('idCate');
            $table->string('title');
            $table->integer('price');
            $table->string('thumbnail');
            $table->text('short_Description');
            $table->text('detailed_description');
            $table->timestamps();
        });

        Schema::table('products', function (Blueprint $table) {

            $table->foreign('idCate')->references('idCate')->on('categories')->onDelete('cascade');
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

