<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking_infos', function (Blueprint $table) {
            $table->increments('bookingId');
            $table->integer('mentorId');
            $table->integer('menteeId');
            $table->float('payAmount');
            $table->string('transactionId');
            $table->string('bookingCode');
            $table->string('agreementForm');
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
        Schema::dropIfExists('booking_infos');
    }
}
