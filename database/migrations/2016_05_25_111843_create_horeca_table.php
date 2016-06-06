<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHorecaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('horeca', function (Blueprint $table) {
            $table->increments('id');
            $table->string('naam');
            $table->string('beschrijving');
            $table->string('afbeelding');
            $table->double('location_lang');
            $table->double('location_long');
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
        Schema::drop('horeca');
    }
}
