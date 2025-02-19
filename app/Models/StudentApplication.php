<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentApplication extends Model
{
    /** @use HasFactory<\Database\Factories\StudentApplicationFactory> */
    use HasFactory;

    protected $fillable = [
        'student_id',
        'student_name',
        'date_of_birth',
        'email',
        'status',
        'application_date',
        'notes', // For admin notes
    ];

    protected $casts = [
        'date_of_birth' => 'date',
        'application_date' => 'date',
    ];

    // Relationships
    public function student() {
        return $this->belongsTo(Student::class);
    }
}
