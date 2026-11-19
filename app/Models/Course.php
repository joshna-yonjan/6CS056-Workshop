<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Enums\Difficulty;

class Course extends Model
{
    protected $fillable = [
        'name',
        'description',
        'duration',
        'fee',
        'difficulty',
        'is_active'
    ];

    protected function casts(): array
    {
        return [
            'difficulty' => Difficulty::class,
            'is_active' => 'boolean',
            'fee' => 'decimal:2',
        ];
    }
}
