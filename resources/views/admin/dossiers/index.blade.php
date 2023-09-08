@extends('admin.dash')

@section('action')
<section class="dossiers-container">
    <h2>Rechercher</h2>
    @if (Route::currentRouteName() === 'entretien.addDossier')
    <h1>{{ $entretien->date_entretien }}</h1>
    @endif
    <div class="container-form">
        <form action="{{ route('dossier.search') }}" method="GET">
            <div class="container-select">
                <label for="etat">Etat: </label>
                <select name="etat" id="etat" value="{{ $input['etat'] ?? '' }}">
                    <option value=""> Selectionner</option>
                    <option value="en attente"> En attente</option>
                    <option value="admis"> Admis</option>
                    <option value="rejeté"> Réjété</option>
                    <option value="tous"> Tous</option>
                </select>
            </div>

            <div class="contianer-recherche">
                <label for="date">Date Entretien: </label>
                <input type="date" name="date_entretien" id="date" value="{{ $input['date_entretien'] ?? '' }}">
            </div>
            <div class="contianer-recherche">
                <label for="session">Session: </label>
                <input type="number" name="session_id" id="session" value="{{ $input['session_id'] ?? '' }}">
            </div>
            <div class="contianer-recherche">
                <button type="submit" id="submit_search">Rechercher</button>
            </div>
        </form>
    </div>


    <div class="conatainer-table">
        <table class="dossier-data-table">
            <thead>
                <tr>
                    <th></th>
                    <th>Nom</th>
                    <th>Prenoms</th>
                    <th>Genre</th>
                    <th>Moyenne Bac</th>
                    <th>Moyenne concours</th>
                    <th>Date de soumission</th>
                    <th>Status</th>
                    @if (Route::currentRouteName() === 'entretien.addDossier')
                    <th>Action</th>
                    @endif
                </tr>
            </thead>
            <tbody>

                @php
                $lesDossiers = $dossiers;
                @endphp

                @forelse ($lesDossiers as $dossier)
                <tr class="{{ Route::currentRouteName() === 'entretien.addDossier' ? '' : "clickable-row" }}" data-href='{{ route('dossier.show', $dossier->id) }}'>
                    <td>
                        {{-- <input type="checkbox" id="" class=""> --}}

                    </td>
                    <td>{{ $dossier->candidat->nom }}</td>
                    <td>{{ $dossier->candidat->prenom }}</td>
                    <td>{{ $dossier->candidat->genre }}</td>
                    <td>{{ $dossier->moyenne_bac }}</td>
                    <td>{{ $dossier->moyenne_concours }}</td>
                    <td>{{ $dossier->date_soumission }}</td>
                    <td>

                        @switch($dossier->etat)
                        @case('admis')
                        <div class="etat est_complet">
                            @include('admin.composants.dash.accepte')
                            Admis
                        </div>
                        @break

                        @case('rejeté')
                        <div class="etat est_rejete">
                            @include('admin.composants.dash.rejete')
                            Rejeté
                        </div>
                        @break

                        @default
                        <div class="etat en_attente">
                            @include('admin.composants.dash.attente')
                            En attente
                        </div>
                        @endswitch

                    </td>
                    @if (Route::currentRouteName() === 'entretien.addDossier')
                    <td>
                        <form action="{{ route('entretien.assigner') }}" method="post">
                            @csrf
                            <button type="submit" class='saver-doss'>Ajouter</button>
                        </form>
                    </td>
                    @endif
                </tr>
                @empty
                Aucun dossier enregistré pour la session
                @endforelse

            </tbody>
        </table>
    </div>

</section>
@push('js')
<script src="{{ asset('admin/js/jquery.min.js') }}"></script>
<script>
    $(document).ready(function() {
        $(".clickable-row").click(function() {
            // Récupérer l'URL ou l'action à effectuer lors du clic
            var url = $(this).data("href");

            // Rediriger vers l'URL ou exécuter une action spécifique
            window.location = url;
        });
    });

</script>
@endpush
@endsection
