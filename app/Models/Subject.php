<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    /** @use HasFactory<\Database\Factories\SubjectFactory> */
    use HasFactory;

    protected $fillable = [
        'subject_name',
        'description',
    ];

    public function classes() { // A subject can be taught in many classes (many-to-many)
        return $this->belongsToMany(Classes::class, 'class_subjects');
    }

    public function teachers() { // A subject can be taught by many teachers (many-to-many)
        return $this->belongsToMany(Teacher::class, 'subject_teacher');
    }

    public function students() { // A subject can be taken by many students (many-to-many)
        return $this->belongsToMany(Student::class, 'student_subject');
    }

    public function assignments() { // A subject has many assignments
        return $this->hasMany(Assignment::class);
    }

    public function examScores() {
        return $this->hasMany(ExamScore::class);
    }

    public function schedule() {
        return $this->belongsToMany(Schedule::class, 'schedule_subject');
    }
}
