<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutBoardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_boards', function (Blueprint $table) {
            $table->id();
            $table->string('page_title')->nullable();
            $table->string('page_des')->nullable();
            $table->string('board_member')->nullable();
            $table->string('name')->nullable();
            $table->string('image')->nullable();
            $table->string('image_path')->nullable();
            $table->unsignedBigInteger('language_id');
            $table->foreign('language_id')->references('id')->on('languages');
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
        Schema::dropIfExists('about_boards');
    }
}
