<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    /** @use HasFactory<\Database\Factories\ScheduleFactory> */
    use HasFactory;

    protected $fillable = [
        'class_id',
        'room_id',
        'day_of_week',
        'start_time',
        'end_time',
        'title',
        'description',
    ];

    public function class() {
        return $this->belongsTo(Classes::class);
    }

    public function subject() {
        return $this->belongsToMany(Subject::class, 'schedule_subject');
    }
}
