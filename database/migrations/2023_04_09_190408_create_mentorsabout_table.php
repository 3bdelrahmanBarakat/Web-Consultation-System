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
        Schema::create('mentorsabout', function (Blueprint $table) {
            $table->id();
            $table->string('photo');
            $table->string('gender');
            $table->unsignedBigInteger('mentor_id');
            $table->date('date_of_birth');
            $table->string('job_title');
            $table->text('bio');
            $table->string('address');
            $table->string('country');
            $table->string('city');
            $table->integer('zip_code');
            $table->foreign('mentor_id')->references('id')->on('mentors')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mentorsabout');
    }
};
