<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBeveragesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('beverage', function (Blueprint $table) {
            $table->increments('id');
            $table->string('naam');
            $table->string('beschrijving');
            $table->string('afbeelding');
            $table->enum('type',['drank','eten']);
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
        Schema::drop('beverage');
    }
}
