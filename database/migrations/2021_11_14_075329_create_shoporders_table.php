<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShopordersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shoporders', function (Blueprint $table) {
            $table->id();
            $table->string('user_id');
            $table->text('product');
            $table->string('count');
            $table->string('status');
            $table->string('name');
            $table->string('lastname');
            $table->string('email');
            $table->bigInteger('number');
            $table->string('address');
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
        Schema::dropIfExists('shoporders');
    }
}
