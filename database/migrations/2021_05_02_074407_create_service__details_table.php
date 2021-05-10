<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service__details', function (Blueprint $table) {
            $table->increments('id');
            $table->string('step');
            $table->string('title');
            $table->text('content');
            $table->string('thumbnail');
            $table->unsignedInteger('idService');
            $table->timestamps();
        });

        Schema::table('service__details', function (Blueprint $table) {
            
            $table->foreign('idService')->references('id')->on('services')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('service__details');
    }
}
