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
        Schema::create('basic_settings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('creationCycle')->unsigned()->default(4);
            $table->integer('startDate')->unsigned()->default(1);
            $table->time('startTime')->default("09:00");
            $table->time('endTime')->default("24:00");
            $table->integer('timeUnit')->unsigned()->default(30);
            $table->integer('startDay')->unsigned()->default(1);
            $table->boolean('confirmed')->nullable()->default(true);
            $table->integer('manager_id')->unsigned();
            $table->foreign('manager_id')->references('id')->on('managers')->onDelete('set null')->onUpdate('cascade');
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
        Schema::dropIfExists('basic_settings');
    }
};
