<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title'); //Information on the post (text/image the user has posted)
            $table->string('contents'); //Image the user has posted
            $table->bigInteger('profile_id')->unsigned(); //profile  of who posted
            $table->bigInteger('group_id')->unsigned(); //posted to what group
            $table->timestamps();

            $table->foreign('profile_id')->references('id')->
                on('profiles')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('group_id')->references('id')->
                on('groups')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
