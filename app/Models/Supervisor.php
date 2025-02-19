<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supervisor extends Model
{
    /** @use HasFactory<\Database\Factories\SupervisorFactory> */
    use HasFactory;

    protected $fillable = [
        'teacher_id',
        'class_id',
    ];

    // Relationships
    public function teacher() {
        return $this->belongsTo(Teacher::class);
    }

    public function class() {
        return $this->belongsTo(Classes::class);
    }
}
