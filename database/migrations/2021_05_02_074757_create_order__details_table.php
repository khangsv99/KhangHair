<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order__details', function (Blueprint $table) {
            $table->unsignedInteger('idOrder');
            $table->unsignedInteger('idPro');
            $table->integer('amount');
            $table->timestamps();
        });

        Schema::table('order__details', function (Blueprint $table) {
            
            $table->foreign('idPro')->references('idPro')->on('products')->onDelete('cascade');
            $table->foreign('idOrder')->references('idOrder')->on('orders')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order__details');
    }
}
