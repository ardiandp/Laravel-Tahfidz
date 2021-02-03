<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAyatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ayat', function (Blueprint $table) {
            $table->increments('idayat');
            $table->integer('nosurat');
            $table->integer('noayat');
            $table->text('arab');
            $table->text('latin');
            $table->text('terjemah');
            $table->string('mp3');
            $table->string('tafsir');
            $table->string('no_juz');
            $table->string('terjemah_kata');
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
        Schema::dropIfExists('ayat');
    }
}
