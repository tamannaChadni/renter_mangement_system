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
        Schema::create('renter_deposit_receipts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('render_id');
            $table->foreign('render_id')->references('id')->on('renters')->onDelete('cascade');
            $table->float('rent_amount',8,2);
            $table->float('water_bill',8,2);
            $table->float('gas_bill',8,2);
            $table->float('electricity_bill',8,2);
            $table->float('total_amount',8,2);
            $table->float('pay_amount',8,2);
            $table->float('owing_amount',8,2);
            $table->boolean('status')->default(0)->comment('0 for pending, 1 for paid');
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
        Schema::dropIfExists('renter_deposit_receipts');
    }
};
