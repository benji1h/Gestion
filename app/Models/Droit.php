<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Droit extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'lib'
    ];

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'droits_users', 'droit_id', 'user_id');
    }
}
