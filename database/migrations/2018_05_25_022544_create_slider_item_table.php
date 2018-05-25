<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSliderItemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slider_items', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('slider_id')->unsigned()->index();
            $table->foreign('slider_id')->references('id')->on('sliders');
            $table->string('title');
            $table->string('subtitle')->nullable();
            $table->text('content');
            $table->string('url')->nullable();
            $table->string('imagen');
            $table->string('background');
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
        Schema::dropIfExists('slider_items');
    }
}
