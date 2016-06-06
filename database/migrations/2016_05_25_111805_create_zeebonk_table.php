<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateZeebonkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zeebonk', function (Blueprint $table) {
            $table->increments('id');
            $table->string('naam');
            $table->string('beschrijving');
            $table->string('afbeelding');
            $table->integer('max_value');
            $table->integer('min_value');
            $table->integer('type');
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
        Schema::drop('zeebonk');
    }
}
