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
        Schema::create('rest_amounts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('render_id');
            $table->foreign('render_id')->references('id')->on('renters')->onDelete('cascade');
            $table->float('owing_amount',8,2);
            $table->boolean('status')->default(0)->comment('1 for approve, 1 for decline');
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
        Schema::dropIfExists('rest_amounts');
    }
};
