<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutMissionVisionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_mission_visions', function (Blueprint $table) {
            
            
            $table->id();
            $table->string('page_title');
            $table->string('page_des');

            $table->string('header_one');
            $table->longText('header_one_des1');
            $table->longText('header_one_des2');
            $table->string('list_1');
            $table->string('list_2');
            $table->string('list_3');

            $table->string('header_two');
            $table->longText('header_two_des1');
            $table->longText('header_two_des2');

            $table->longText('community_des');

            $table->string('team');
            $table->string('full_name');
            $table->string('company');
            $table->string('position');
            $table->string('email');
            $table->string('image')->nullable();

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
        Schema::dropIfExists('about_mission_visions');
    }
}
