<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;
use App\Models\Dossier;

class Note extends Model
{
    use HasFactory;

    protected $fillable = ['math', 'ang', 'fr'];

    protected $table = 'notes';


    public function dossier():BelongsTo{
        return $this->belongsTo(Dossier::class);
    }
}
