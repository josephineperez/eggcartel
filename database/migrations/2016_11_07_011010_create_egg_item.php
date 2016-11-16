<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEggItem extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('egg_item', function (Blueprint $table) {
            $table->integer('egg_id')->unsigned()->index();
            $table->foreign('egg_id')->references('id')->on('eggs');
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
        Schema::drop('egg_item');
    }
}
