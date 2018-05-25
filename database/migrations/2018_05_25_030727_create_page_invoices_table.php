<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePageInvoicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page_invoices', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('page_id')->unsigned()->index();
            $table->foreign('page_id')->references('id')->on('pages');

            $table->integer('invoice_id')->unsigned()->index();
            $table->foreign('invoice_id')->references('id')->on('invoices');
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
        Schema::dropIfExists('page_invoices');
    }
}
