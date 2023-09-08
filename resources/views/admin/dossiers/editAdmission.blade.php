<div class="tout admission-modal">
    <div class="dossier-modal" id='edit-admission'>
        <div class="adder-notes">
            <a href="#" class="close-admission" id="close">
                <hr id="trait1">
                <hr id="trait2">
            </a>
            <h1>{{ $dossier->candidat->nom }} {{ $dossier->candidat->prenom }}
            </h1>
            <form action="{{ route('dossier.updateAdmission', $dossier) }}" class="dossier-form" method="POST">
                @method('put')
                @csrf
                <section>

                    <fieldset class="etat-dossier">
                        <legend>Admission du candidat</legend>
                        <div class="form-dossier-ligne">
                            <label for="attente">En attente</label><input type="radio" name="etat" id="attente"
                                value="en attente" {{ $dossier->etat == 'en attente' ? 'checked' : '' }}>
                            <label for="attente" class="rad"></label>

                        </div>
                        <div class="form-dossier-ligne">
                            <label for="rejete">Rejeté</label>
                            <input type="radio" name="etat" id="rejete" value="rejeté"
                                {{ $dossier->etat == 'rejeté' ? 'checked' : '' }}>
                            <label for="rejete" class="rad"></label>

                        </div>
                        <div class="form-dossier-ligne">
                            <label for="admis">Admis</label>
                            <input type="radio" name="etat" id="admis" value="admis"
                                {{ $dossier->etat == 'admis' ? 'checked' : '' }}>
                            <label for="admis" class="rad"></label>

                        </div>
                    </fieldset>

                </section>
                <button type="submit" class='saver-doss close-admission'>Finis</button>
            </form>
        </div>
    </div>
</div>
