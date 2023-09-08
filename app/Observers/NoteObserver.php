<?php

namespace App\Observers;

use App\Models\Dossier;

class NoteObserver
{
    //
    public function saved($note)
    {

        $moyenne = ($note->math + $note->ang + $note->fr) / 3;
        $moyenne = number_format($moyenne, 2, '.', '');
        $dossier = Dossier::find($note->dossier_id);
        $dossier->moyenne_concours = $moyenne;
        $dossier->save();
    }
}
