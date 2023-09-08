@extends('admin.dash')
@section('action')
    <div class="dossiers-container">
        @foreach ($entretiens as $entretien)
            <div class="header-dossier">
                <div class="session-concours">

                    Entretien: </div>
                <div class="date-concours">
                    <div class="date-data">{{ $entretien->date_entretien }} </div>
                    {{ $entretiens->links('pagination::drey') }}
                </div>

                <div class="button-create-session">
                    <svg viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="feather feather-plus">
                        <path d="M12 5v14M5 12h14" />
                    </svg>
                    Create
                </div>

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
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $lesDossiers = $dossiers[$entretien->id];
                        @endphp

                        @forelse ($lesDossiers as $dossier)
                            <tr class="clickable-row" data-href='{{ route('dossier.show', $dossier->id) }}'>
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
                                <td>
                                    <form action="{{ route('entretien.retirer', $dossier->id) }}" method="post">
                                        @csrf
                                        <button type="submit" class='saver-doss'>Retirer</button>
                                    </form>
                                </td>
                            </tr>
                            @empty
                                Aucun dossier enregistré pour la session
                            @endforelse

                        </tbody>
                    </table>
                </div>
            @endforeach
        </div>
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
        <!-- partial -->
    @endsection
