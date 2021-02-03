<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerkataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perkata', function (Blueprint $table) {
            $table->increments('idkata');
            $table->integer('idayat');
            $table->integer('nosurat');
            $table->integer('noayat');
            $table->text('terjemah_kata');
            $table->text('text_arab');
            $table->integer('nojuz');
            $table->text('latin');
            $table->text('terjemah');
            $table->string('mp3');
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
        Schema::dropIfExists('perkata');
    }
}
