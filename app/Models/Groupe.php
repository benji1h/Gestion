<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Groupe extends Model
{
    use HasFactory;

    protected $fillable = [
        'acro',
        'lib'
    ];

    public function evenements(): BelongsToMany
    {
        return $this->belongsToMany(Evenement::class, 'evenements_groupes', 'groupe_id', 'evenement_id');
    }

    public function inscriptions(): BelongsToMany
    {
        return $this->belongsToMany(Inscription::class, 'groupes_inscriptions', 'groupe_id', 'inscription_id');
    }

    public function aas(): BelongsToMany
    {
        return $this->belongsToMany(AA::class, 'aa_groupes', 'aa_id', 'groupe_id');
    }
}
