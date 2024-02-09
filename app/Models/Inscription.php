<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Inscription extends Model
{
    use HasFactory;

    protected $fillable = [
        'date_debut',
        'date_fin',
        'etat'
        
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function groupes(): BelongsToMany
    {
        return $this->belongsToMany(Groupe::class, 'groupes_inscriptions', 'inscription_id', 'groupe_id');
    }

    public function orientation(): BelongsTo
    {
        return $this->belongsTo(Orientation::class);
    }

    public function aas(): BelongsToMany
    {
        return $this->belongsToMany(AA::class, 'aa_inscription', 'inscription_id', 'aa_id');
    }

}
