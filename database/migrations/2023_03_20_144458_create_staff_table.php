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
        Schema::create('staff', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('firstname_k', 100)->nullable();
            $table->string('lastname_k', 100)->nullable();
            $table->string('firstname_h', 100)->nullable();
            $table->string('lastname_h', 100)->nullable();
            $table->boolean('linkStatus')->default(false);
            $table->string('nickname', 100)->nullable();
            $table->integer('sex')->default(0);
            $table->string('phoneNumber', 100)->nullable();
            $table->string('email', 100)->nullable();
            $table->string('postCode', 100)->nullable();
            $table->string('address', 255)->nullable();
            $table->string('buildingName', 100)->nullable();
            $table->float('hourly')->nullable();
            $table->float('transPrice')->nullable();
            $table->string('staffCode', 100)->nullable();
            $table->string('memo', 100)->nullable();
            $table->integer('leave')->unsigned()->default(0);
            $table->date('leave_at')->nullable();
            $table->integer('group_id')->unsigned();
            $table->foreign('group_id')->references('id')->on('groups')->onDelete('set null')->onUpdate('cascade');
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
        Schema::dropIfExists('staff');
    }
};
