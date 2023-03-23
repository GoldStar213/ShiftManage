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
        Schema::create('managers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('accountId')->unique();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('storeName');
            $table->string('industryPart');
            $table->string('phoneNumber');
            $table->string('postCode');
            $table->string('address');
            $table->string('buildingName');
            $table->string('map')->nullable();
            $table->string('emailContact');
            $table->string('applicationCode');
            $table->integer('licenseStatus')->default(0);
            $table->date('freeStart_at');
            $table->date('freeEnd_at');
            $table->date('paidStart_at');
            $table->date('paidEnd_at');
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
        Schema::dropIfExists('managers');
    }
};
