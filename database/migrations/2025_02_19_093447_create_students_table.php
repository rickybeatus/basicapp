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
        Schema::create('students', function (Blueprint $table) {
            $table->id('student_id');
            $table->unsignedBigInteger('class_id')->nullable();
            $table->foreign('class_id')->references('class_id')->on('classes')->onDelete('set null');
            $table->string('student_name');
            $table->date('date_of_birth')->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('registration_status')->default('Pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
