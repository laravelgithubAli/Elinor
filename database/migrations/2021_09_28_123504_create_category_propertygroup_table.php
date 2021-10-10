<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoryPropertygroupTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_propertygroup', function (Blueprint $table) {
            $table->foreignId('category_id')->constrained();
            $table->foreignId('propertygroup_id')->constrained();

            $table->primary(['category_id','propertygroup_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category_propertygroup');
    }
}
