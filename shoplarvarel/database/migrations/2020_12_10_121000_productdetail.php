<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Productdetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productdetail', function (Blueprint $table) {
            $table->id('id');
            $table->integer('product_id');
            $table->string('cpu');
            $table->string('ram');
            $table->string('screen');
            $table->string('SDcard');
            $table->string('SIM');
            $table->string('camera');
            $table->string('pin');
            $table->string('os');
            $table->string('storage');
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
        Schema::dropIfExists('productdetail');
    }
}
