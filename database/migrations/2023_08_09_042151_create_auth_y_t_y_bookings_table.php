<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use NunoMaduro\Collision\Adapters\Phpunit\State;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('auth_y_t_y_bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->text('booking_number');
            $table->string('cod',50)->default(null);

            $table->string('parcel_name',255);

            $table->string('sender_name',100);
            $table->string('sender_phone',15);
            $table->string('sender_city',100);
            $table->text('sender_address_detail');

            $table->foreignId('sender_township_id');


            $table->string('receiver_name',100);
            $table->string('receiver_phone',15);
            $table->string('receiver_city',100);
            $table->text('receiver_address_detail');

            $table->foreignId('receiver_township_id');


            $table->integer('weight');
            $table->integer('count');
            $table->decimal('fees');

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
        Schema::dropIfExists('auth_y_t_y_bookings');
    }
};
