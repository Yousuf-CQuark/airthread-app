<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DataStore extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('responseDatas',function(Blueprint $table){
            
            $table->string('shirtInp');
            $table->string('heightInp');
            $table->string('preferedInp');
            $table->string('chestInp');
            $table->string('waistInp');
            $table->string('sleeveInp');
            $table->integer('api_shoulder');
            $table->integer('api_chest_width');
            $table->integer('api_waist_width');
            $table->integer('api_back_length');
            $table->integer('api_sleeve_length');
            $table->integer('api_sleeve_width');
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
        //
        Schema::drop('responseDatas');
    }
}
