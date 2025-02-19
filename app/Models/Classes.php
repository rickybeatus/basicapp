<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Classes extends Model
{
    /** @use HasFactory<\Database\Factories\ClassesFactory> */
    use HasFactory;

    protected $filable = [
        'level_id',
        'class_name',
    ];

    public function level():BelongsTo
    {
        return $this->belongsTo(Level::class);
    }

    public function students() { // A class has many students
        return $this->hasMany(Student::class);
    }

    public function teachers() { // A class has many teachers (many-to-many)
        return $this->belongsToMany(Teacher::class, 'teacher_classes');
    }

    public function subjects() { // A class has many subjects (many-to-many)
        return $this->belongsToMany(Subject::class, 'class_subjects');
    }

    public function schedules() { // A class has many schedules
        return $this->hasMany(Schedule::class);
    }
}
