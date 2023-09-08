<div class="note-modal tout">
    <div class="dossier-modal" id='edit-note'>
        <div class="adder-notes">
            <a href="#" class="close-note">
                <hr id="trait1">
                <hr id="trait2">
            </a>
            <h1>{{ $dossier->candidat->nom }} {{ $dossier->candidat->prenom }}
            </h1>
            <form action="{{ route('dossier.updateNote', $dossier) }}" class="dossier-form" method="POST">
                @method('put')
                @csrf
                <section>
                    <fieldset>
                        <legend>Notes concours</legend>
                        <div class="form-dossier-ligne">
                            <label for="math">Math</label>
                            <input type="number" name="math" id="math">
                        </div>
                        <div class="form-dossier-ligne">
                            <label for="anglais">Anglais</label>
                            <input type="number" name="ang" id="ang">
                        </div>
                        <div class="form-dossier-ligne">
                            <label for="francais">Français</label>
                            <input type="number" name="fr" id="fr">
                        </div>
                    </fieldset>
                </section>
                <button type="submit" class='saver-doss close-note'>Enregistrer</button>
            </form>
        </div>
    </div>
</div>
