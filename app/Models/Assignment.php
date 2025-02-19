<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    /** @use HasFactory<\Database\Factories\AssignmentFactory> */
    use HasFactory;

    protected $fillable = [
        'subject_id',
        'class_id',
        'teacher_id',
        'due_date',
        'title',
        'description',
    ];

    // Relationships
    public function subject() {
        return $this->belongsTo(Subject::class);
    }

    public function class() {
        return $this->belongsTo(Classes::class);
    }

    public function teacher() {
        return $this->belongsTo(Teacher::class);
    }

    public function students() {  // Students who have this assignment (through grades)
        return $this->belongsToMany(Student::class, 'assignment_grades')->withPivot('grade');
    }

    public function grades() {
        return $this->hasMany(AssignmentGrade::class);
    }
}
