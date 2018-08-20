<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryPagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_pages', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('category_id');

            $table->foreign('category_id')->references('id')->on('categories');

            $table->text('excerpt')->nullable();
            $table->text('body');
            $table->string('image');
            $table->text('meta_descriptio');
            $table->text('meta_keywords');
            $table->string('template');
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
        Schema::dropIfExists('category_pages');
    }
}
