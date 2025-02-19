<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    /** @use HasFactory<\Database\Factories\AttendanceFactory> */
    use HasFactory;

    protected $fillable = [
        'student_id',
        'class_id',
        'teacher_id',
        'date',
        'status', // 'Present', 'Absent', 'Late', etc.
        'time',
        'reason', 
    ];

    // Relationships
    public function student() {
        return $this->belongsTo(Student::class);
    }

    public function class() {
        return $this->belongsTo(Classes::class);
    }

    public function teacher() {
        return $this->belongsTo(Teacher::class);
    }
}
