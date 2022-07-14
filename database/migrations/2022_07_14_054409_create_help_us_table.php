<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHelpUsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('help_us', function (Blueprint $table) {
            $table->id();
            $table->string('page_title');
            $table->string('sub_header1');
            $table->string('sub_header2');
            $table->string('paragraph1');

            $table->string('card_header');
            $table->string('card_des');

            $table->string('page_second_title');
            $table->string('paragraph2');

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
        Schema::dropIfExists('help_us');
    }
}
