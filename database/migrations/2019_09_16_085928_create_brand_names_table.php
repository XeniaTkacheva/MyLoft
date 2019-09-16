<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBrandNamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('brand_names', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title', 64)->unique();
            $table->bigInteger('catalog_id')->nullable();
            $table->tinyInteger('in_catalog')->default(1);
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
        Schema::dropIfExists('brand_names');
    }
}
