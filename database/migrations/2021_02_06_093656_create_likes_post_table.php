<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLikesPostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('likes_post', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->tinyInteger('vote'); // like = 1, dislikes = 0
            $table->timestamps();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('post_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('post_id')->references('id')->on('post');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $table->dropForeign(['post_id']);
        $table->dropForeign(['user_id']);
        $table->dropColumn(['post_id']);
        $table->dropColumn(['user_id']);
        Schema::dropIfExists('likes_post');
    }
}
