<?php

namespace App\Models;

use App\Models\Dossier;
use App\Models\Decoupage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Niveau extends Model
{
    use HasFactory;

    protected $fillable = ['nom', 'annee','systeme','serie','etablissement','dossier_id'];

    protected $table = 'niveaus';

    public function dossier():BelongsTo{
        return $this->belongsTo(Dossier::class);
    }

    public function decoupage(): HasMany
    {
        return $this->hasMany(Decoupage::class);
    }
}
