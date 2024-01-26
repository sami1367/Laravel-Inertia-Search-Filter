<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNannyBookingsTable extends Migration
{
    public function up()
    {
        Schema::create('nanny_bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained(); // Belongs to relationship with User model
            $table->string('title');
            $table->decimal('price', 8, 2);
            $table->dateTime('start_date_time');
            $table->dateTime('end_date_time');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('nanny_bookings');
    }
}
