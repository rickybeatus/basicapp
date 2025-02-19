<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TuitionFee extends Model
{
    /** @use HasFactory<\Database\Factories\TuitionFeeFactory> */
    use HasFactory;

    protected $fillable = [
        'student_id',
        'amount',
        'month',
        'due_date',
    ];

    public function student() {
        return $this->belongsTo(Student::class);
    }

}
