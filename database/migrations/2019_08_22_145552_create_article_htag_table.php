<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticleHtagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article_htag', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('article_id');
            $table->unsignedBigInteger('htag_id');
            $table->timestamps();

            $table->index('article_id');
            $table->index('htag_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('article_htag');
    }
}
