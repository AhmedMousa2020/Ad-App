<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Adstagsrelation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adsTagsRelations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ads_post_id');
            $table->unsignedBigInteger('tag_id');
            $table->timestamps();

            $table->unique(['ads_post_id','tag_id']);
            $table->foreign('ads_post_id')->references('id')->on('ads_posts')->onDelete('cascade');
            $table->foreign('tag_id')->references('id')->on('tags')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tags');
    }
}
