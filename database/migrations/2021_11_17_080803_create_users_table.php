<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name',225)->unique();
            $table->string('email',225)->unique();
            $table->string('password',225)->unique();
            // $table->string('phone',225)->nullable();
            // $table->string('address',225)->nullable();
            $table->tinyInteger('type')->default(1);
            
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamps();
            $table->rememberToken('token')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
