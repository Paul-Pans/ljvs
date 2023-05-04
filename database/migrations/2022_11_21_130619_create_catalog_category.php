<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * cid ид
     * category_name
     * parent_id
     * position
     * level
     * @return void
     */

    public function up()
    {
        Schema::create('catalog_categories', function (Blueprint $table) {
            $table->id('cid');
            $table->uuid('cuuid')->nullable();
            $table->string('category_name');
            $table->integer('parent_id');
            $table->integer('position')->nullable();
            $table->integer('level')->nullable();
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
        Schema::dropIfExists('catalog_category');
    }
};
