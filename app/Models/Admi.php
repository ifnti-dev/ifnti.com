<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use App\Models\Dossier;

class Admi extends Model
{
    use HasFactory;


    protected $fillable = ['date_rentree'];
    protected $table = 'admis';

    public function dossier():HasOne{
        return $this->hasOne(Dossier::class);
    }
}
