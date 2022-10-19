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
        Schema::create('renters', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('landlord_id');
            $table->foreign('landlord_id')->references('id')->on('landlords')->onDelete('cascade');
            $table->string('renter_name');
            $table->string('phn_number');
            $table->string('floor');
            $table->string('flat_number');
            $table->string('NID')->uniqid();
            $table->integer('advance_amount');
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
        Schema::dropIfExists('renters');
    }
};
