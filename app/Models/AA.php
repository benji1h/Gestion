<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AA extends Model
{
    use HasFactory;

    protected $fillable = [
        'acro',
        'lib',
        'h',
        'q',
        'ects'
    ];

    public function ue(): belongsTo
    {
        return $this->belongsTo(UE::class);
    }

    public function inscriptions(): BelongsToMany
    {
        return $this->belongsToMany(Inscription::class, 'aa_inscriptions', 'aa_id', 'inscription_id');
    }

    public function groupes(): BelongsToMany
    {
        return $this->belongsToMany(Groupe::class, 'aa_groupes', 'aa_id', 'groupe_id');
    }
}
