<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evenement extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'debut',
        'fin'
    ];

    public function groupes(): BelongsToMany
    {
        return $this->belongsToMany(Groupe::class, 'evenements_groupes', 'evenement_id', 'groupe_id');
    }
}
