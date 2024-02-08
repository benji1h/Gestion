<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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
        return $this->belongsToMany(Campus::class, 'campus_engagements', 'engagement_id', 'campus_id');
    }

    public function departements(): BelongsToMany
    {
        return $this->belongsToMany(Departement::class, 'departements_engagements', 'engagement_id', 'departement_id');
    }
}
