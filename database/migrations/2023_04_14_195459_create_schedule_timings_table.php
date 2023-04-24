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
        Schema::create('schedule_timings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('mentor_id');
            $table->unsignedBigInteger('mentee_id')->nullable();
            $table->string('status')->default('pending');
            $table->string('day');
            $table->time('start_time')->format('H:i');
            $table->time('end_time')->format('H:i');
            $table->string('duration');
            $table->foreign('mentor_id')->references('id')->on('mentors')->onDelete('cascade');
            $table->foreign('mentee_id')->references('id')->on('mentees')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schedule_timings');
    }
};
