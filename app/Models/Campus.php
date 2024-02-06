<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campus extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'adresse',
        'tel'
        
    ];

    public function departement(): BelongsTo
    {
        return $this->belongsTo(Campus::class);
    }

    public function locaux(): HasMany
    {
        return $this->hasMany(Local::class);
    }

    public function engagements(): BelongsToMany
    {
        return $this->belongsToMany(Engagement::class, 'campus_engagements', 'campus_id', 'engagement_id');
    }
}
