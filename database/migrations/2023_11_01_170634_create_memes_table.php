<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::create('memes', function (Blueprint $table) {
        $table->id();
        $table->string('author');
        $table->boolean('nsfw');
        $table->string('postLink');
        $table->json('preview');
        $table->integer('score');
        $table->boolean('spoiler');
        $table->string('subreddit');
        $table->string('title');
        $table->integer('ups');
        $table->string('url');
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
        Schema::dropIfExists('memes');
    }
};
