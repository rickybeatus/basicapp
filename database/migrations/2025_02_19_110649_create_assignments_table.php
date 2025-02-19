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
        Schema::create('assignments', function (Blueprint $table) {
            $table->id('assignment_id');
            $table->unsignedBigInteger('subject_id');
            $table->unsignedBigInteger('class_id')->nullable();
            $table->unsignedBigInteger('teacher_id');
            $table->foreign('subject_id')->references('subject_id')->on('subjects')->cascadeOnDelete();
            $table->foreign('class_id')->references('class_id')->on('classes')->nullOnDelete();
            $table->foreign('teacher_id')->references('teacher_id')->on('teachers')->cascadeOnDelete();
            $table->date('due_date');
            $table->string('title');
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assignments');
    }
};
