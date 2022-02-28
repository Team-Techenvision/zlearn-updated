<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->tinyInteger('user_id');
            $table->date('dob')->nullable();; 
            $table->string('image')->nullable(); 
            $table->longText('address');
            $table->string('city');
            $table->string('pin_code',10);
            $table->string('state');
            $table->string('country');
            $table->string('semister');              
            $table->tinyInteger('role_id')->nullable();  
            $table->tinyInteger('status')->default(1)->comment('1-activate,0-de-activate');
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
        Schema::dropIfExists('user_details');
    }
}
