<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Departement extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'adresse',
        'tel'        
    ];

    public function campus(): HasMany
    {
        return $this->hasMany(campus::class);
    }

    public function engagements(): BelongsToMany
    {
        return $this->belongsToMany(Engagement::class, 'departements_engagements', 'departement_id', 'engagement_id');
    }
}
