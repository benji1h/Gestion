<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Materiel extends Model
{
    use HasFactory;

    protected $fillable = [
        'lib',
        'type',
        'marque',
        'prix',
        'etat'
    ];

    public function local(): BelongsTo
    {
        return $this->belongsTo(Local::class);
    }
}
