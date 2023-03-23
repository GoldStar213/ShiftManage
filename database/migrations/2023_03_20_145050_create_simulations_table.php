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
        Schema::create('simulations', function (Blueprint $table) {
            $table->increments('id');
            $table->time('goinTime')->nullable();
            $table->time('gooutTime')->nullable();
            $table->time('restinTime')->nullable();
            $table->time('restoutTime')->nullable();
            $table->time('overTime')->nullable();
            $table->time('lateTime')->nullable();
            $table->float('hourly')->nullable();
            $table->date('date')->nullable();
            $table->float('commutPrice')->nullable();
            $table->boolean('confirmed')->nullable()->default(true);
            $table->integer('staff_id')->unsigned()->nullable();
            $table->foreign('staff_id')->references('id')->on('staff')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('simulations');
    }
};
