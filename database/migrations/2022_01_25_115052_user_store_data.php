<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UserStoreData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('user_details',function(Blueprint $table){
            $table->increments('customer_id');
            $table->string('shirtInp');
            $table->string('heightInp');
            $table->string('preferedInp');
            $table->string('chestInp');
            $table->string('waistInp');
            $table->string('sleeveInp');
            $table->boolean('status');
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
        Schema::drop('user_details');
    }
}
