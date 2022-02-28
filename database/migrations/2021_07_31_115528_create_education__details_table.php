<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEducationDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('education__details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->tinyInteger('user_id');
            $table->string('compus')->nullable();
            $table->tinyInteger('degree')->nullable();
            $table->tinyInteger('roll_no')->nullable();            
            $table->string('education')->nullable();
            $table->string('current_address')->nullable();
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
        Schema::dropIfExists('education__details');
    }
}
