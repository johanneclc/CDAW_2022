<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlaylistsMediaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('playlists_media', function (Blueprint $table) {
            $table->id('id_playlist_media');
            $table->unsignedBigInteger('id_media');
            $table->foreign('id_media')->references('id_media')->on('medias')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedBigInteger('id_playlist');
            $table->foreign('id_playlist')->references('id_playlist')->on('playlists')->onDelete('restrict')->onUpdate('restrict');
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
        Schema::dropIfExists('playlists_media');
    }
}
