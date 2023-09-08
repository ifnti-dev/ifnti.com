<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Relations\HasOne;
use App\Models\Dossier;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidat extends Model
{
    use HasFactory;

    protected $fillable = ['nom', 'prenom', 'dateNaissance','adresse', 'telephone', 'email', 'etablissement', 'nationalite', 'tel_tuteur', 'genre','situation'];

    //protected $table = 'candidats';
    public function dossier():HasOne{
        return $this->hasOne(Dossier::class);
    }
}
