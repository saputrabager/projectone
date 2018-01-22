<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDtpsksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dtpsks', function (Blueprint $table) {
            $table->increments('post_id');
            $table->string('p_title');
            $table->text('p_desc');
            $table->smallInteger('p_view');
            $table->boolean('avail');
            $table->string('user_id');
            $table->string('hm_id');
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
        Schema::dropIfExists('dtpsks');
    }
}
