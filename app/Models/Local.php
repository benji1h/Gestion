<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Local extends Model
{
    use HasFactory;

    protected $fillable = [
        'lib',
        'etage',
        'nb_place',
        'etat'
    ];

    public function materiels(): HasMany
    {
        return $this->hasMany(Materiel::class);
    }

    public function campus(): BelongsTo
    {
        return $this->belongsTo(Campus::class);
    }
}
