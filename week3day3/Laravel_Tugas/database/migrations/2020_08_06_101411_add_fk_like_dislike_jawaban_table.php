<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFkLikeDislikeJawabanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('like_dislike_jawaban', function (Blueprint $table) {
            $table->unsignedBigInteger('jawaban_id');
            $table->foreign('jawaban_id')->references('id')->on('jawaban');

            $table->unsignedBigInteger('profil_id');
            $table->foreign('profil_id')->references('id')->on('profil');

            $table->primary(['jawaban_id', 'profil_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('like_dislike_jawaban', function (Blueprint $table) {
            $table->dropPrimary('profil_id');
            $table->dropPrimary('jawaban_id');

            $table->dropForeign(['profil_id']);
            $table->dropColumn(['profil_id']);

            $table->dropForeign(['jawaban_id']);
            $table->dropColumn(['jawaban_id']);
        });
    }
}
