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
        Schema::create('tuition_fees', function (Blueprint $table) {
            $table->id('tuition_fee_id');
            $table->unsignedBigInteger('student_id');
            $table->foreign('student_id')->references('student_id')->on('students')->cascadeOnDelete();
            $table->decimal('amount', 10, 2); // Amount with precision and scale
            $table->string('month');
            $table->date('due_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tuition_fees');
    }
};
