<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    /** @use HasFactory<\Database\Factories\TeacherFactory> */
    use HasFactory;

    protected $filable = [
        'teacher_name',
        'email',
    ];

    public function classes() {
        return $this->belongsToMany(Classes::class, 'teacher_classes');
    }

    public function subjects() { // A teacher can teach many subjects (many-to-many)
        return $this->belongsToMany(Subject::class, 'subject_teacher');
    }

    public function attendance() { // A teacher can have many attendance records
        return $this->hasMany(Attendance::class);
    }

    public function assignments() {
        return $this->hasMany(Assignment::class);
    }

    public function supervisors() {
        return $this->hasOne(Supervisor::class);
    }
}
