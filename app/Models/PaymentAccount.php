<?php

namespace App\Models;

use Faker\Provider\ar_EG\Payment;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentAccount extends Model
{
    /** @use HasFactory<\Database\Factories\PaymentAccountFactory> */
    use HasFactory;

    protected $fillable = [
        'account_name',
        'account_number',
        'bank_name',
    ];

    public function transactiontypes() {
        return $this->hasMany(TransactionType::class);
    }
}
