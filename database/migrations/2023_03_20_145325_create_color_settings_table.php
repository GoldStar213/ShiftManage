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
        Schema::create('color_settings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('confirmColor')->unsigned()->nullable()->default(1);
            $table->integer('restColor')->unsigned()->nullable()->default(3);
            $table->string('patternName', 100)->nullable();
            $table->integer('patternColor')->unsigned()->nullable()->default(1);
            $table->boolean('confirmed')->nullable()->default(true);
            $table->integer('manager_id')->unsigned();
            $table->foreign('manager_id')->references('id')->on('managers')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('color_settings');
    }
};
