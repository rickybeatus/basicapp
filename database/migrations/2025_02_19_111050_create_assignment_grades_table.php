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
        Schema::create('assignment_grades', function (Blueprint $table) {
            $table->id('grade_id');
            $table->unsignedBigInteger('student_id');
            $table->unsignedBigInteger('assignment_id');
            $table->foreign('student_id')->references('student_id')->on('students')->cascadeOnDelete();
            $table->foreign('assignment_id')->references('assignment_id')->on('assignments')->cascadeOnDelete();
            $table->unique(['student_id', 'assignment_id']);
            $table->decimal('grade', 5, 2)->nullable(); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assignment_grades');
    }
};
