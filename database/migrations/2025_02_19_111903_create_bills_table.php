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
        Schema::create('bills', function (Blueprint $table) {
            $table->id('bill_id');
            $table->unsignedBigInteger('student_id');
            $table->unsignedBigInteger('type_id')->nullable();
            $table->foreign('student_id')->references('student_id')->on('students')->cascadeOnDelete();
            $table->foreign('type_id')->references('type_id')->on('transaction_types')->nullOnDelete();
            $table->decimal('amount', 10, 2);
            $table->date('due_date');
            $table->date('issued_date');
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bills');
    }
};
