<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    /** @use HasFactory<\Database\Factories\PaymentFactory> */
    use HasFactory;

    protected $filable = [
        'type_id',
        'bill_id',
        'payment_date',
        'amount_paid',
        'tuition_fee_id',
    ];

    protected $casts = [
        'payment_date' => 'date',
    ];

    public function transactionType() {
        return $this->belongsTo(TransactionType::class, 'type_id');
    }

    public function bill() {
        return $this->belongsTo(Bill::class);
    }

    public function tuitionfee() {
        return $this->belongsTo(TuitionFee::class);
    }
}
