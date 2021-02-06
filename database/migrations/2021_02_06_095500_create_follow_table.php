<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFollowTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('follow', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('following_id'); // orang yang ngefollow
            $table->unsignedBigInteger('followed_id'); // orang yang di follow
            $table->foreign('following_id')->references('id')->on('users');
            $table->foreign('followed_id')->references('id')->on('users');
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
        $table->dropForeign(['followed_id']);
        $table->dropForeign(['following_id']);
        $table->dropColumn(['followed_id']);
        $table->dropColumn(['following_id']);
        Schema::dropIfExists('follow');
    }
}
