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
        Schema::create('labor_settings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('startDate')->unsigned()->nullable()->default(0);
            $table->integer('overRate')->unsigned()->nullable()->default(25);
            $table->integer('lateRate')->unsigned()->nullable()->default(25);
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
        Schema::dropIfExists('labor_settings');
    }
};
