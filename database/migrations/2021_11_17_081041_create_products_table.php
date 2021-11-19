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
            $table->id();
            $table->string('name',225)->unique();
            $table->bigInteger('id-type')->references('id')->on('product_type')->ondelete('cascade');
            $table->text('description')->nullable();
            $table->float('price',20)->nullable();
            $table->string('img')->nullable();
            $table->boolean('unit')->default(1);
            $table->boolean('new')->default(1);
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
        Schema::dropIfExists('products');
    }
}
