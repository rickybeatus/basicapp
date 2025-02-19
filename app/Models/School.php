<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class School extends Model
{
    /** @use HasFactory<\Database\Factories\SchoolFactory> */
    use HasFactory;

    protected $fillable = [
        'school_name',
        'address',
        'phone_number'
    ];

    public function levels(): HasMany
    {
        return $this->hasMany(Level::class);
    }
}
