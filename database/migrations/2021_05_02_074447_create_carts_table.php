<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->unsignedInteger('idPro');
            $table->unsignedInteger('idUser');
            $table->integer('amount');
            $table->timestamps();
        });

        Schema::table('carts', function (Blueprint $table) {
            
            $table->foreign('idPro')->references('idPro')->on('products')->onDelete('cascade');
            $table->foreign('idUser')->references('id')->on('user')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carts');
    }
}
