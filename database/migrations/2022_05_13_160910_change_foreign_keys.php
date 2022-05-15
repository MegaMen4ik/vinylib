<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('artists', function(Blueprint $table) {
            $table->dropForeign('artists_band_id_foreign');
            $table->dropColumn('band_id');
        });
        Schema::table('albums', function(Blueprint $table) {
            $table->dropForeign('albums_artist_id_foreign');
            $table->dropColumn('artist_id');
            $table->dropForeign('albums_band_id_foreign');
            $table->dropColumn('band_id');
        });
        Schema::table('songs', function(Blueprint $table) {
            $table->dropForeign('songs_artist_id_foreign');
            $table->dropForeign('songs_band_id_foreign');
            $table->dropColumn('artist_id');
            $table->dropColumn('band_id');
        });
        Schema::create('band_compositions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('artist_id')->nullable();
            $table->unsignedBigInteger('band_id')->nullable();
            $table->year('get_in')->nullable();
            $table->year('get_out')->nullable();
            $table->timestamps();
            $table->foreign('artist_id')->references('id')->on('artists');
            $table->foreign('band_id')->references('id')->on('bands');
        });
        Schema::create('song_executors', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('song_id')->nullable();
            $table->string('model_name')->nullable();
            $table->unsignedBigInteger('model_id')->nullable();
            $table->timestamps();
            $table->foreign('song_id')->references('id')->on('songs');
        });
        Schema::create('album_executors', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('album_id')->nullable();
            $table->string('model_name')->nullable();
            $table->unsignedBigInteger('model_id')->nullable();
            $table->timestamps();
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
        Schema::table('band_compositions', function(Blueprint $table) {
            $table->dropForeign('band_compositions_artist_id_foreign');
            $table->dropForeign('band_compositions_band_id_foreign');
        });
        Schema::table('album_executors', function(Blueprint $table) {
            $table->dropForeign('album_executors_album_id_foreign');
        });
        Schema::table('song_executors', function(Blueprint $table) {
            $table->dropForeign('song_executors_song_id_foreign');
        });
        Schema::dropIfExists('album_executors');
        Schema::dropIfExists('song_executors');
        Schema::dropIfExists('band_compositions');
        Schema::table('artists', function(Blueprint $table) {
            $table->unsignedBigInteger('band_id')->after('pseudonym')->nullable(true);
            $table->foreign('band_id')->references('id')->on('bands');
        });
        Schema::table('albums', function(Blueprint $table) {
            $table->unsignedBigInteger('artist_id')->after('name')->nullable(true);
            $table->foreign('artist_id')->references('id')->on('artists');
            $table->unsignedBigInteger('band_id')->after('artist_id')->nullable(true);
            $table->foreign('band_id')->references('id')->on('bands');
        });
        Schema::table('songs', function(Blueprint $table) {
            $table->unsignedBigInteger('artist_id')->after('album_id')->nullable(true);
            $table->foreign('artist_id')->references('id')->on('artists');
            $table->unsignedBigInteger('band_id')->after('artist_id')->nullable(true);
            $table->foreign('band_id')->references('id')->on('bands');
        });

    }
}
