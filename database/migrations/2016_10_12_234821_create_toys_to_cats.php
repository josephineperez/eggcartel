<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateToysToCats extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('cat_toy', function (Blueprint $table) {
           
            $table->integer('cat_id')->unsigned()->index();
            $table->foreign('cat_id')->references('id')->on('cats')->onDelete('cascade');
            $table->integer('toy_id')->unsigned()->index();
            $table->foreign('toy_id')->references('id')->on('toys')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::drop('cat_toy');
    }
}
