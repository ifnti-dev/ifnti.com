<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Dossier;

class SessionConcour extends Model
{
    use HasFactory;

    protected $fillable = ['date_debut', 'date_fin'];

    protected $table = 'sessionconcours';

    public function dossiers(): HasMany
    {
        return $this->hasMany(Dossier::class);
    }
}
