<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdsPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ads_posts', function (Blueprint $table) {
            $table->id();
            $table->enum('type',['free' ,'paid'])->default('paid');
            $table->string('title');
            $table->text('description');
            $table->bigInteger('category_id')-> unsigned();
            $table->bigInteger('user_id')-> unsigned();
            $table->dateTime('start_date');
            $table->timestamps();
         //   $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
           // $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ads_posts');
    }
}
