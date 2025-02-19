<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssignmentGrade extends Model
{
    /** @use HasFactory<\Database\Factories\AssignmentGradeFactory> */
    use HasFactory;

    protected $fillable = [
        'student_id',
        'assignment_id',
        'grade',
    ];

    // Relationships
    public function student() {
        return $this->belongsTo(Student::class);
    }

    public function assignment() {
        return $this->belongsTo(Assignment::class);
    }
}
