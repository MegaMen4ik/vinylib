<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('albums', function (Blueprint $table) {
            $table->foreign('artist_id')->references('id')->on('artists');
        });

        Schema::table('songs', function (Blueprint $table) {
            $table->foreign('artist_id')->references('id')->on('artists');
            $table->foreign('album_id')->references('id')->on('albums');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('albums', function(Blueprint $table) {
            $table->dropForeign('albums_artist_id_foreign');
        });
        Schema::table('songs', function(Blueprint $table) {
            $table->dropForeign('songs_artist_id_foreign');
            $table->dropForeign('songs_album_id_foreign');
        });
    }
}
