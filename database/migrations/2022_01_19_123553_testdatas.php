<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Testdatas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('testresponsedatas',function(Blueprint $table){
            
            $table->string('shoulder_for_test');
            $table->string('chest_width_for_test');
            $table->string('waist_width_for_test');
            $table->string('back_length_for_test');
            $table->string('sleeve_length_for_test');
            $table->string('sleeve_width_for_test');
            $table->primary('Customer_id_for_test');
           
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
    }
}
