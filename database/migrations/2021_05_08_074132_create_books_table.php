<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('idUser');
            $table->unsignedInteger('idEmp');
            $table->date('date');
            $table->string('time');
            $table->timestamps();
        });

        Schema::table('books', function (Blueprint $table) {
            
            $table->foreign('idEmp')->references('id')->on('user')->onDelete('cascade');
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
        Schema::dropIfExists('books');
    }
}
