<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcademicsDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('academics_details', function (Blueprint $table) {             
            $table->bigIncrements('id');
            $table->tinyInteger('user_id');
            $table->string('sslc_perce')->nullable();
            $table->string('sslc_year')->nullable();
            $table->string('puc_perce')->nullable();            
            $table->string('puc_year')->nullable();
            $table->string('diploma_perce')->nullable();
            $table->string('diploma_year')->nullable();
            $table->string('ddl_graduation')->nullable();            
            $table->string('other_graduation')->nullable();
            $table->string('ddl_pg')->nullable();
            $table->string('other_pg')->nullable();            
            $table->string('avg_cgpa')->nullable();
            $table->string('year_graduation')->nullable();
            $table->string('curr_backlog')->nullable();            
            $table->string('num_year_backlog')->nullable();
            $table->string('gap')->nullable();
            $table->string('gap_explan')->nullable();
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
        Schema::dropIfExists('academics_details');
    }
}
