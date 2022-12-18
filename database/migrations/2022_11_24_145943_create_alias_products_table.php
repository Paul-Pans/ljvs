<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * У продукта может быть несколько алиасов
     * @return void
     */
    public function up()
    {
        Schema::create('alias_products', function (Blueprint $table) {
            $table->comment('Product names alias there may be several');
            $table->id('aid');
            $table->integer('pid');
            $table->uuid('puuid')->nullable();
            $table->string('alias_product');
            $table->integer('note')->nullable();
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
        Schema::dropIfExists('alias_products');
    }
};
