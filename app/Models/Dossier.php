<?php

namespace App\Models;

use App\Models\Candidat;
use App\Models\Note;
use App\Models\SessionConcour;
use App\Models\Admi;
use App\Models\Niveau;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class Dossier extends Model
{
    use HasFactory;

    protected $fillable = ['moyenne_bac', 'appreciation', 'estValide', 'moyenne_concours','serie', 'date_soumission','etat','date_entretien','candidat_id','session_concour_id'];

    protected $table = 'dossiers';

    public function candidat():BelongsTo{
        return $this->belongsTo(Candidat::class);
    }

    public function note():HasOne{
        return $this->hasOne(Note::class);
    }

    public function sessionconcour(): BelongsTo
    {
        return $this->belongsTo(SessionConcour::class);
    }

    public function admi():BelongsTo{
        return $this->belongsTo(Admi::class);
    }

    public function niveau(): HasMany
    {
        return $this->hasMany(Niveau::class);
    }

    public function entretien():BelongsTo{
        return $this->belongsTo(Entretien::class);
    }
}
