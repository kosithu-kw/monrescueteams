<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRescueteamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rescueteams', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->integer('city_id');
            $table->string('team_name');
            $table->string('phone_one')->nullable();
            $table->string('phone_two')->nullable();
            $table->string('phone_three')->nullable();
            $table->string('phone_four')->nullable();
            $table->string('phone_five')->nullable();
            $table->string('phone_six')->nullable();
            $table->string('phone_seven')->nullable();
            $table->string('phone_eight')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rescueteams');
    }
}
