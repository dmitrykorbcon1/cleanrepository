<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAlbums extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('albums', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('year')->unsigned();
            $table->string('image')->default('');
            $table->string('title')->default('title');
            $table->integer('tracksnum')->unsigned()->nullable();
         });
    }

    /**
     * Reverse the migrations.     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('albums');
    }
}
