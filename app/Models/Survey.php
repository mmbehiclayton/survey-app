<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'country',
        'assistance',
        'case_number',
        'documents',
    ];

    protected $casts = [
        'documents' => 'array',
    ];
}
