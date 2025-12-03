<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Conference extends Model
{
    use HasFactory;


    protected $fillable = [
        'title',
        'description',
        'date',
        'address',
        'city',
        'participants_count',
    ];


    protected function casts(): array
    {
        return [
            'date' => 'date',
            'participants_count' => 'integer',
        ];
    }
}
