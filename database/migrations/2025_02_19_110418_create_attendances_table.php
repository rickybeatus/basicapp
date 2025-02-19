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
        Schema::create('attendances', function (Blueprint $table) {
            $table->id('attendance_id');
            $table->unsignedBigInteger('student_id');
            $table->unsignedBigInteger('class_id');
            $table->unsignedBigInteger('teacher_id')->nullable();
            $table->foreign('student_id')->references('student_id')->on('students')->cascadeOnDelete();
            $table->foreign('class_id')->references('class_id')->on('classes')->cascadeOnDelete();
            $table->foreign('teacher_id')->references('teacher_id')->on('teachers')->nullOnDelete();
            $table->date('date');
            $table->string('status'); // 'Present', 'Absent', 'Late', etc.
            $table->time('time')->nullable();
            $table->text('notes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attendances');
    }
};
