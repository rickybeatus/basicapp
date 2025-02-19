<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    /** @use HasFactory<\Database\Factories\BillFactory> */
    use HasFactory;

    protected $fillable = [
        'student_id',
        'type_id',
        'amount',
        'due_date',
        'issued_date',
        'description',
    ];

    public function student() {
        return $this->belongsTo(Student::class);
    }

    public function transactiontype() {
        return $this->belongsTo(TransactionType::class);
    }
}
