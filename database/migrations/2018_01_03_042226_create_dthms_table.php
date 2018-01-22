<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDthmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dthms', function (Blueprint $table) {
            $table->increments('hm_id');
            $table->string('location');
            $table->text('address');
            $table->string('type');
            $table->string('payment');
            $table->integer('cost');
            $table->smallInteger('room');
            $table->smallInteger('toilet');
            $table->smallInteger('kitchen');
            $table->smallInteger('garage');
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
        Schema::dropIfExists('dthms');
    }
}
