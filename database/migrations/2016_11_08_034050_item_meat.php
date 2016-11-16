<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ItemMeat extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item_meat', function (Blueprint $table) {
            $table->integer('item_id')->unsigned()->index();
            $table->foreign('item_id')->references('id')->on('items');
            $table->integer('meat_id')->unsigned()->index();
            $table->foreign('meat_id')->references('id')->on('meats');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('item_meat');
    }
}
