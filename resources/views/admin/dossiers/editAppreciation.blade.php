<div class="tout appreciation-modal">
    <div class="dossier-modal" id='edit-appreciation'>
        <div class="adder-notes">
            <a href="#" class="close-appreciation">
                <hr id="trait1">
                <hr id="trait2">
            </a>
            <h1>{{ $dossier->candidat->nom }} {{ $dossier->candidat->prenom }}
            </h1>
            <form action="{{ route('dossier.updateAppreciation', $dossier) }}" class="dossier-form" method="POST">
                @method('put')
                @csrf
                <section>
                    <fieldset>
                        <legend>Appreciation</legend>
                        <div class="dossier-appreciation">
                            <textarea name="appreciation" id="appreciation" cols="30" rows="10"></textarea>
                        </div>
                    </fieldset>
                </section>
                <button type="submit" class='saver-doss close-appreciation'>Enregistrer</button>
            </form>
        </div>
    </div>
</div>
