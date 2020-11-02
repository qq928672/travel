<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLodgingModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lodging_models', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('imagefile');
            $table->string('phone');
            $table->string('location');
            $table->string('type');
            $table->string('info');
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
        Schema::dropIfExists('lodging_models');
    }
}
