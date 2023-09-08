<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Niveau;
use App\Models\Bullettin;
use App\Models\Matiere;

class Decoupage extends Model
{
    use HasFactory;

    protected $fillable = ['nom','niveau_id','id_bulletin'];

    protected $table = 'decoupages';

    public function niveau():BelongsTo{
        return $this->belongsTo(Niveau::class);
    }

    public function bulletin():HasOne{
        return $this->hasOne(Bulletin::class);
    }

    public function matieres():HasMany{
        return $this->hasMany(Matiere::class);
    }
}
