<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Entretien extends Model
{
    use HasFactory;
    protected $fillable = [
        "date"
    ];
    protected $table = "entretiens";
    public function dossier() :HasMany{
        return $this->hasMany(Dossier::class);
    }
}
