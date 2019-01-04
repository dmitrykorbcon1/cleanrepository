<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ImportDump extends Migration
{
    /**
     * Импорт дампа базы данных для начального наполнения таблиц
     *
     * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
     */

    public function up()
    {
        \DB::unprepared(File::get('public/dump/noga.sql'));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
