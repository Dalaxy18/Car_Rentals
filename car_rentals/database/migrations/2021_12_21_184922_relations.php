<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Relations extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('cars', function (Blueprint $table) {
          $table->id();
          $table->string("name");
          $table->string("model");
          $table->integer("Engine_capacity");
          $table->integer("Horsepower");
          $table->string("ShortDescription");



      });

      Schema::create('reservations', function (Blueprint $table) {
          $table->id();
          $table->bigInteger("id_customer")->unsigned();
          $table->bigInteger("id_car")->unsigned();
          $table->date("Date_reservation");
          $table->date("Date_return");
          $table->foreign("id_customer")->references("id")->on("users");
          $table->foreign("id_car")->references("id")->on("cars");



      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
          Schema::dropIfExists('reservations');
          Schema::dropIfExists('cars');

    }
}
