<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    /** @use HasFactory<\Database\Factories\StudentFactory> */
    use HasFactory;

    protected $fillable = [
        'class_id',
        'student_name',
        'date_of_birth',
        'email',
        'registration_status',
    ];

    public function class() {
        return $this->belongsTo(Classes::class);
    }

    public function attendance() { // A student has many attendance records
        return $this->hasMany(Attendance::class);
    }

    public function assignments() { // A student has many assignments through grades
        return $this->belongsToMany(Assignment::class, 'assignment_grades')->withPivot('grade');
    }

    public function subjects() { // A student has many subjects (many-to-many)
        return $this->belongsToMany(Subject::class, 'student_subject');
    }

    public function examScores() {
         return $this->hasMany(ExamScore::class);
    }

    public function bills() {
        return $this->hasMany(Bill::class);
    }

    public function tuitionFees() {
        return $this->hasMany(TuitionFee::class);
    }

    public function applications() {
        return $this->hasOne(StudentApplication::class);
    }
}
