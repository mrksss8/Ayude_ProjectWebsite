<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFinancingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('financings', function (Blueprint $table) {

            $table->id();
            $table->string('page_title_1')->nullable();
            $table->longtext('page_title_1_paragraph1')->nullable();
            $table->string('page_title_1_sub_header1')->nullable();
            $table->string('page_title_1_list')->nullable();
            $table->longtext('page_title_1_sub_header1_list1')->nullable();
            $table->longtext('page_title_1_paragraph2')->nullable();

            $table->string('page_title2')->nullable();
            $table->longtext('page_title_2_paragraph')->nullable();
            $table->string('page_title_2_sub_header1')->nullable();
            $table->longtext('page_title_2_sub_header1_description')->nullable();
            
            $table->string('page_title_2_sub_header1_card')->nullable();
            $table->string('page_title_2_sub_header1_card_head')->nullable();
            $table->longtext('page_title_2_sub_header1_card_description')->nullable();
            $table->string('page_title_2_sub_header1_card_image')->nullable();

            $table->string('page_title_2_sub_header2')->nullable();
            $table->longtext('page_title_2_sub_header2_description')->nullable();

            $table->string('page_title_2_sub_header3')->nullable();
            $table->longtext('page_title_2_sub_header3_description')->nullable();

            $table->string('page_title_2_sub_header4')->nullable();
            $table->longtext('page_title_2_sub_header4_description')->nullable();

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
        Schema::dropIfExists('financings');
    }
}
