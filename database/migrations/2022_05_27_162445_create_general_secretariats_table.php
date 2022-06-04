<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGeneralSecretariatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('general_secretariats', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('language_id');
            $table->foreign('language_id')->references('id')->on('languages');
            $table->string('header');
            $table->string('name');
            $table->string('address');
            $table->string('gsm');
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
        Schema::dropIfExists('general_secretariats');
    }
}
