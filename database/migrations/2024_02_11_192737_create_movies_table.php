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
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->String('name');
            $table->text('description');
            $table->enum('quality', ['cam', 'FullHd', '720p', '1080p', '4k']);
            $table->String('image');
            $table->date('release_year');
            $table->integer('reproduction_number');
            $table->String('language');
            $table->String('video_link');
            $table->String('download_link');

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');

            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')
                                                        ->on('categories')
                                                        ->onUpdate('cascade')
                                                        ->onDelete('cascade');
            
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
        Schema::dropIfExists('movies');
    }
};
