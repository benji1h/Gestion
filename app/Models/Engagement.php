<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Engagement extends Model
{
    use HasFactory;

    protected $fillable = [
        'debut',
        'fin',
        'type'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function campus(): BelongsToMany
    {
        return $this->belongsToMany(Campus::class, 'campus_engagements', 'campus_id', 'engagement_id');
    }

    public function departements(): BelongsToMany
    {
        return $this->belongsToMany(Departement::class, 'departements_engagements', 'departement_id', 'engagement_id');
    }
}
