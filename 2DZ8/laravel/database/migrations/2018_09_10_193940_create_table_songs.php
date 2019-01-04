<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableSongs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('songs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->default('title');
            $table->string('timing')->default('00.00');
            $table->integer('track')->unsigned();
            $table->integer('album_id')->unsigned()->nullable();
            $table->foreign('album_id')->references('id')->on('albums')->onUpdate('cascade')->onDelete('cascade');
            $table->index('album_id');
            $table->rememberToken();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('songs');
    }
}
