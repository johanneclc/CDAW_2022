<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonnesMediaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personnes_media', function (Blueprint $table) {
            $table->id('id_personne_media');
            $table->unsignedBigInteger('id_media');
            $table->foreign('id_media')->references('id_media')->on('medias')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedBigInteger('id_personne');
            $table->foreign('id_personne')->references('id_personne')->on('personnes')->onDelete('restrict')->onUpdate('restrict');
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
        Schema::dropIfExists('personnes_media');
    }
}
