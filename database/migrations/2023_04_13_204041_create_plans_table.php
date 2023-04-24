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
        Schema::create('plans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('mentor_id');
            $table->integer('price');
            $table->string('plan_type');
            $table->integer('number_of_sessions')->nullable();
            $table->boolean('is_chat_allowed')->nullable()->default(false);
            $table->integer('response_time')->nullable();
            $table->text('description');
            $table->foreign('mentor_id')->references('id')->on('mentors')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plans');
    }
};
