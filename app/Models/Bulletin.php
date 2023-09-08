<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Decoupage;

class Bulletin extends Model
{
    use HasFactory;

    protected $fillable = ['fichier'];

    protected $table = 'bulletins';

    public function decoupage():BelongsTo{
        return $this->belongsTo(Decoupage::class);
    }
}
