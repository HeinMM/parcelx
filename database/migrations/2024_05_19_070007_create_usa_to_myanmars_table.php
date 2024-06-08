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
        Schema::create('usa_to_myanmars', function (Blueprint $table) {
            $table->id();

            $table->string('booking_number',15);

            $table->string('user_id')->nullable();

            $table->string('sender_name',50);
            $table->string('sender_phone',30);

            $table->string('receiver_name',50);
            $table->string('receiver_phone',30);
            $table->text('receiver_address');

            $table->foreignId('delivery_man_id')->nullable();

            $table->timestamp('assign_at')->nullable();
            $table->timestamp('road_at')->nullable();
            $table->timestamp('complete_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usa_to_myanmars');
    }
};

