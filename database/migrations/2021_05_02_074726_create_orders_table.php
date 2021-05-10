<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('idOrder');
            $table->string('payMents');//0: online, 1:Tien mat
            $table->integer('totalMoney');
            $table->string('status');//trang thai giao
            $table->unsignedInteger('idUser');
            $table->timestamps();
        });

        Schema::table('orders', function (Blueprint $table) {
            
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
        Schema::dropIfExists('orders');
    }
}
