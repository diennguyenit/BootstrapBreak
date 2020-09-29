<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Contents extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contents', function(Blueprint $table){
            $table->increments('id');
            $table->tinyInteger('content_type');
            $table->string('img');
            $table->string('title');
            $table->string('description');
            $table->json('link');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('contents');

    }
}
