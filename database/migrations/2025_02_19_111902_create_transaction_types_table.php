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
        Schema::create('transaction_types', function (Blueprint $table) {
            $table->id('type_id');
            $table->string('type_name');
            $table->string('type_category');
            $table->unsignedBigInteger('account_id')->nullable();
            $table->foreign('account_id')->references('account_id')->on('payment_accounts')->nullOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaction_types');
    }
};
