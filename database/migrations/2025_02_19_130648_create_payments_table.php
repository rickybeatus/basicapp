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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('type_id')->nullable();
            $table->foreign('type_id')->references('type_id')->on('transaction_types')->nullOnDelete();
            $table->unsignedBigInteger('bill_id')->nullable(); 
            $table->foreign('bill_id')->references('bill_id')->on('bills')->nullOnDelete();
            $table->date('payment_date');
            $table->decimal('amount_paid', 10, 2); // Amount with precision and scale
            $table->unsignedBigInteger('tuition_fee_id')->nullable(); 
            $table->foreign('tuition_fee_id')->references('tuition_fee_id')->on('tuition_fees')->nullOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
