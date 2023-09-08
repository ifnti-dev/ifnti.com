<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Decoupage;

class Matiere extends Model
{
    use HasFactory;

    protected $fillable = ['nom', 'note','decoupage_id'];

    protected $table = 'matieres';

    public function decoupage():BelongsTo{
        return $this->belongsTo(Decoupage::class);
    }
}
