<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CheeseItem extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cheese_item', function (Blueprint $table) {
            $table->integer('cheese_id')->unsigned()->index();
            $table->foreign('cheese_id')->references('id')->on('cheeses');
            $table->integer('item_id')->unsigned()->index();
            $table->foreign('item_id')->references('id')->on('items');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('cheese_item');
    }
}
