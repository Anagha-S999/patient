<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patient_models', function (Blueprint $table) {
            $table->id();

            $table->string("pcode");
            $table->string("pname");
            $table->string("paddress");
            $table->string("pmob");
            $table->string("psym");
            $table->string("pdia");
            
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
        Schema::dropIfExists('patient_models');
    }
}
