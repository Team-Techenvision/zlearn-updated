<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('question_title')->nullable();
            $table->tinyInteger('question_type')->default(1)->comment('1-image,0-text');
            $table->string('question')->nullable();
            $table->string('choice_count',20)->nullable();
            $table->tinyInteger('explanation')->nullable();            
            $table->string('question_level')->nullable();
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
        Schema::dropIfExists('questions');
    }
}
