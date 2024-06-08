<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('y_t_n_bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->text('booking_number');

            $table->string('parcel_name',50);

            $table->string('sender_name',50);
            $table->string('sender_phone',15);
            $table->string('sender_city',50);
            $table->foreignId('sender_township_id');
            $table->text('sender_address_detail');

            $table->string('receiver_name',50);
            $table->string('receiver_phone',15);
            $table->string('receiver_city',50);
            $table->text('receiver_address_detail');

            $table->integer('weight');
            $table->integer('count');

            $table->foreignId('delivery_man_id');
            $table->foreignId('status_id');

            $table->timestamp('assign_at')->nullable();
            $table->timestamp('road_at')->nullable();
            $table->timestamp('qrcode_at')->nullable();
            $table->timestamp('complete_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('y_t_n_bookings');
    }
};
