<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamScore extends Model
{
    /** @use HasFactory<\Database\Factories\ExamScoreFactory> */
    use HasFactory;

    protected $fillable = [
        'student_id',
        'subject_id',
        'class_id',
        'score',
        'date',
    ];

    // Relationships
    public function student() {
        return $this->belongsTo(Student::class);
    }

    public function subject() {
        return $this->belongsTo(Subject::class);
    }

    public function class() {
        return $this->belongsTo(Classes::class);
    }
}
