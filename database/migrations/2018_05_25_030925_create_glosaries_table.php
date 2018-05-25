<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGlosariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('glosaries', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('term_id')->unsigned()->index();
            $table->foreign('term_id')->references('id')->on('terms');
            $table->string('name');
            $table->text('content');
            $table->integer('state')->default('1');
            $table->integer('order');
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
        Schema::dropIfExists('glosaries');
    }
}
