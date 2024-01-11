<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AA extends Model
{
    use HasFactory;

    protected $fillable = [
        'acro',
        'lib',
        'h',
        'q',
        'ects'
    ];
}
