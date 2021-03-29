<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEpisodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('episodes', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->string('img_url');
            $table->string('audio_url');
            $table->string('duration');
            $table->string('posted_on');
            $table->integer('season');
            $table->integer('episode');
            $table->string('anchor_podcast');
            $table->string('apple_podcasts')->nullable();
            $table->string('google_podcasts')->nullable();
            $table->char('archive', 2)->default('0');
            $table->char('featured', 2)->default('0');
            $table->string('slug');
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
        Schema::dropIfExists('episodes');
    }
}
