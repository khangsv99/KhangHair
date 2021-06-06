<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaymentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('idOrder');
            $table->string('vnp_Amount');
            $table->string('vnp_BankCode');
            $table->string('vnp_BankTranNo');
            $table->string('vnp_CardType');
            $table->string('vnp_OrderInfo');
            $table->string('vnp_PayDate');
            $table->string('vnp_ResponseCode');
            $table->string('vnp_TmnCode');
            $table->string('vnp_TransactionNo');
            $table->string('vnp_TxnRef');
            $table->string('vnp_SecureHashType');
            $table->string('vnp_SecureHash');
            $table->timestamps();
        });

        Schema::table('payments', function (Blueprint $table) {
            
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
        Schema::dropIfExists('payments');
    }
}
