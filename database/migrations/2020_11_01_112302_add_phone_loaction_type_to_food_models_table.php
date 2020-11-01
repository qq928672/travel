<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPhoneLoactionTypeToFoodModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('food_models', function (Blueprint $table) {
            $table->string('phone')->after('imagefile');
            $table->string('location')->after('phone');
            $table->string('type')->after('location');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('food_models', function (Blueprint $table) {
            $table->dropColumn('phone');
            $table->dropColumn('location');
            $table->dropColumn('type');
        });
    }
}
