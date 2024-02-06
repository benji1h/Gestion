<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;

    protected $fillable = [
        'acro',
        'lib'
        
    ];

    public function orientations(): HasMany
    {
        return $this->hasMany(Orientation::class);
    }
}
