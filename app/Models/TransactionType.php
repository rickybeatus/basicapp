<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionType extends Model
{
    /** @use HasFactory<\Database\Factories\TransactionTypeFactory> */
    use HasFactory;

    protected $fillable = [
        'type_name', 
        'type_category',
        'account_id',
    ];

    public function bills() {
        return $this->hasMany(Bill::class);
    }

    public function account() {
        return $this->belongsTo(PaymentAccount::class);
    }
}
