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
            $table->foreignId('role_id')->constrained();
            $table->string('name');
            $table->string('lastname');
            $table->string('email')->unique();
            $table->bigInteger('number')->unique();
            $table->string('password');
            $table->string('job')->nullable();
            $table->string('image')->nullable();
            $table->string('nationalCode')->nullable();
            $table->string('address')->nullable();
            $table->string('gender')->nullable();
            $table->string('cardNumber')->nullable();
            $table->date('birthday')->nullable();
            $table->string('Newsletters')->nullable();
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
        Schema::dropIfExists('users');
    }
}
