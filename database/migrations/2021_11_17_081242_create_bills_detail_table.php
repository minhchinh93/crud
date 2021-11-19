<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillsDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bills_detail', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_bill')->references('id')->on('bills');
            $table->bigInteger('id_product')->references('id')->on('products');
            $table->integer('quantity');
            $table->float('price');


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
        Schema::dropIfExists('bills_detail');
    }
}
