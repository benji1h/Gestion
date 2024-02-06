<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UE extends Model
{
    use HasFactory;

    protected $fillable = [
        'acro',
        'lib'
    ];

    public function aas(): HasMany
    {
        return $this->hasMany(AA::class);
    }

    public function orientation(): BelongsTo
    {
        return $this->belongsTo(orientation::class);
    }
}
