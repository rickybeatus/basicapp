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
        Schema::create('exam_scores', function (Blueprint $table) {
            $table->id('score_id');
            $table->unsignedBigInteger('student_id');
            $table->unsignedBigInteger('subject_id');
            $table->unsignedBigInteger('class_id');
            $table->foreign('student_id')->references('student_id')->on('students')->cascadeOnDelete();
            $table->foreign('subject_id')->references('subject_id')->on('subjects')->cascadeOnDelete();
            $table->foreign('class_id')->references('class_id')->on('classes')->cascadeOnDelete();
            $table->decimal('score', 5, 2)->nullable(); 
            $table->date('date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exam_scores');
    }
};
