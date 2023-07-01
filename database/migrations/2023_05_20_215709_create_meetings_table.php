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
        Schema::create('meetings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('mentor_id');
            $table->unsignedBigInteger('mentee_id');
            $table->unsignedBigInteger('booking_id')->nullable();
            $table->string('meeting_id');
            $table->dateTime('start_at');
            $table->integer('duration')->comment('minutes');
            $table->string('password')->nullable()->comment('meeting password');
            $table->string('topic');
            $table->text('start_url');
            $table->text('join_url');
            $table->foreign('mentor_id')->references('id')->on('mentors')->onDelete('cascade');
            $table->foreign('mentee_id')->references('id')->on('mentees')->onDelete('cascade');
            $table->foreign('booking_id')->references('id')->on('bookings')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('meetings');
    }
};
