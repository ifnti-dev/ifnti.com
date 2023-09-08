@extends('admin.dash')

@section('action')
    <section class="show"> @switch($dossier->etat)
            @case('admis')
                <div style="width: 50px;height:50px; border-radius:50%; background:green" class="view_status">
                </div>
            @break

            @case('rejeté')
                <div style="width: 50px;height:50px; border-radius:50%; background:red"class="view_status">

                </div>
            @break

            @default
                <div style="width: 50px;height:50px; border-radius:50%;background:orange"class="view_status">

                </div>
        @endswitch
        <div class="dossier-vue">
            <h1 class="leDossier">Dossier No {{ $dossier->id }}</h1>


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
            <div class="container-tous">
                <div class="container-candidat">
                    <h3>Informations candidat</h3>
                    <div class="infos-personnelles"
                        @switch($dossier->etat) 
                        @case('admis')
                            style="border: 2px solid #1aa385"
                            @break
                        @case('rejeté')
                            style="border: 2px solid red"
                            @break
                        @default
                            style="border: 2px solid orange"
                    @endswitch>
                        <div class="infos">
                            <p>Nom</p>
                            <p class="dot">:</p>
                            <p>{{ $dossier->candidat->nom }}</p>
                        </div>
                        <div class="infos">
                            <p>Prenom</p>
                            <p class="dot">:</p>
                            <p>{{ $dossier->candidat->prenom }}</p>
                        </div>
                        <div class="infos">
                            <p>Genre</p>
                            <p class="dot">:</p>
                            <p>{{ $dossier->candidat->genre }}</p>
                        </div>
                        <div class="infos">
                            <p>Nationnalité</p>
                            <p class="dot">:</p>
                            <p>{{ $dossier->candidat->nationalite }}</p>
                        </div>
                        <div class="infos">
                            <p>Date de naissance</p>
                            <p class="dot">:</p>
                            <p>{{ $dossier->candidat->dateNaissance }}</p>
                        </div>
                        <div class="infos">
                            <p>Ets de provenance</p>
                            <p class="dot">:</p>
                            <p>{{ $dossier->candidat->etablissement }}</p>
                        </div>
                        <div class="infos">
                            <p>Adresse</p>
                            <p class="dot">:</p>
                            <p>{{ $dossier->candidat->adresse }}</p>
                        </div>
                        <div class="infos">
                            <p>Contact</p>
                            <p class="dot">:</p>
                            <p>{{ $dossier->candidat->telephone }}</p>
                        </div>
                        <div class="infos">
                            <p>Email</p>
                            <p class="dot">:</p>
                            <p>{{ $dossier->candidat->email }}</p>
                        </div>
                        <div class="infos">
                            <p>Tuteur</p>
                            <p class="dot">:</p>
                            <p>{{ $dossier->candidat->tel_tuteur }}</p>
                        </div>
                    </div>
                </div>

                <div class="divers">
                    <h3>Notes</h3>
                    <div class="container-notes"
                        @switch($dossier->etat) 
                        @case('admis')
                            style="border: 2px solid #1aa385"
                            @break
                        @case('rejeté')
                            style="border: 2px solid red"
                            @break
                        @default
                            style="border: 2px solid orange"
                    @endswitch>

                        <div class="notes">
                            <p>Moyenne bac</p>
                            <p class="dot">:</p>
                            <p>{{ $dossier->moyenne_bac }}</p>
                        </div>
                        <div class="notes">
                            <p>Moyenne concours</p>
                            <p class="dot">:</p>
                            <p>{{ $dossier->moyenne_concours }}</p>
                        </div>
                    </div>
                    <h3>Informations Concours</h3>
                    <div class="container-notes"
                        @switch($dossier->etat) 
                        @case('admis')
                            style="border: 2px solid #1aa385"
                            @break
                        @case('rejeté')
                            style="border: 2px solid red"
                            @break
                        @default
                            style="border: 2px solid orange"
                    @endswitch>

                        <div class="notes">
                            <p>MATH</p>
                            <p class="dot">:</p>
                            <p>{{ $dossier->note->math }}</p>
                        </div>
                        <div class="notes">
                            <p>Anglais</p>
                            <p class="dot">:</p>
                            <p>{{ $dossier->note->ang }}</p>
                        </div>
                        <div class="notes">
                            <p>Français</p>
                            <p class="dot">:</p>
                            <p>{{ $dossier->note->fr }}</p>
                        </div>
                    </div>
                </div>
            </div>

            @php
                $niveaux = $dossier->niveau;
            @endphp

            <div class="mes-tables">

                <div class="preview" id="previous">
                    <button id="a1" style="visibility: hidden;"><img src=" {{ asset('admin/images/prev.png') }}"
                            alt="" id="prev"></button>
                </div>
                <div class="container-tables-" id="container-tables">
                    @foreach ($niveaux as $niveau)
                        <div class="conatainer-table1 @if ($loop->index < 2) active @endif">
                            <h2 class="title-dossier">{{ $niveau->nom }} ({{ $niveau->annee }})</h2>
                            <table class="dossier-tables ">
                                <thead>
                                    <tr>
                                        <th>Decoupage</th>
                                        <th>MAth</th>
                                        <th>Français</th>
                                        <th>Anglais</th>
                                        <th>Bulltein</th>
                                    </tr>
                                </thead>
                                @php
                                    $decoupages = $niveau->decoupage;
                                @endphp
                                <tbody>
                                    @foreach ($decoupages as $decoupage)
                                        <tr>
                                            <td>{{ $decoupage->nom }}</td>
                                            @php
                                                $matieres = $decoupage->matieres;
                                            @endphp
                                            @foreach ($matieres as $matiere)
                                                @if ($matiere->nom == 'math')
                                                    <td>{{ $matiere->note }}</td>
                                                @endif
                                                @if ($matiere->nom == 'fr')
                                                    <td>
                                                        {{ $matiere->note }}</td>
                                                @endif

                                                @if ($matiere->nom == 'ang')
                                                    <td>
                                                        {{ $matiere->note }}</td>
                                                @endif
                                            @endforeach

                                            <td><button id="dowload">dowload</button></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @endforeach
                </div>
                <div class="next">

                    <button id="a2"><img src="{{ asset('admin/images/next.png') }}" alt=""
                            id="next"></button>

                </div>


            </div>
            <a href="#edit-note" id="show-dossier-editer-note-link">Editer notes</a>
            <a href="#edit" id="show-dossier-appreciation-link">Ajouter une appréciation</a>
            <a href="#edit" id="show-dossier-editer-link">Gerer l'admission</a>


    </section>
    @include('admin.dossiers.editNote')
    @include('admin.dossiers.editAppreciation')
    @include('admin.dossiers.editAdmission')
    @push('js')
        <script src="{{ asset('admin/js/jquery.min.js') }}"></script>
        <script>
            $(function() {
                $(".tout").hide();
                $(".close-note").click(function() {
                    $(".note-modal").toggle();
                    $(".show").toggleClass('blur');
                })
                $(".close-appreciation").click(function() {
                    $(".appreciation-modal").toggle();
                    $(".show").toggleClass('blur');
                })
                $(".close-admission").click(function() {
                    $(".admission-modal").toggle();
                    $(".show").toggleClass('blur');
                })

                $("#show-dossier-editer-note-link").click(function(e) {
                    e.preventDefault();
                    $(".note-modal").toggle();
                    $(".show").toggleClass('blur');
                })
                $("#show-dossier-appreciation-link").click(function(e) {
                    e.preventDefault();
                    $(".appreciation-modal").toggle();
                    $(".show").toggleClass('blur');
                })
                $("#show-dossier-editer-link").click(function(e) {
                    e.preventDefault();
                    $(".admission-modal").toggle();
                    $(".show").toggleClass('blur');
                })
            })
        </script>
        <script>
            const lienA1 = document.getElementById('a1');
            const lienA2 = document.getElementById('a2');

            const tableauImg = [
                '../admin/images/next-white.png',
                '../admin/images/prev-white.png',
                '../admin/images/prev.png',
                '../admin/images/next.png'
            ]
            const next = document.getElementById('next')
            const prev = document.getElementById('prev')
            const lien1 = document.getElementById('a1')
            const lien2 = document.getElementById('a2')

            lienA1.addEventListener('mouseenter', e => {
                e.preventDefault
                prev.setAttribute('src', tableauImg[1])
            })

            lienA1.addEventListener('mouseleave', e => {
                e.preventDefault
                prev.setAttribute('src', tableauImg[2])
            })

            lienA2.addEventListener('mouseenter', e => {
                e.preventDefault

                next.setAttribute('src', tableauImg[0])
            })

            lienA2.addEventListener('mouseleave', e => {
                e.preventDefault
                next.setAttribute('src', tableauImg[3])
            })




            $(document).ready(function() {
                let currentChild = 0;
                let totalChildren = $('#container-tables').children().length;

                $('#a1').click(function() {
                    if (currentChild > 0) {
                        currentChild--;
                    }
                    updateChild();
                });

                $('#a2').click(function() {
                    if (currentChild < totalChildren - 1) {
                        currentChild++;
                    }
                    updateChild();
                });

                function updateChild() {
                    let $children = $('#container-tables').children();
                    $children.removeClass('active');
                    let startIndex = currentChild * 2;
                    let endIndex = startIndex + 1;
                    $($children.slice(startIndex, endIndex + 1)).addClass('active');

                    if ($('.conatainer-table1:last-child').hasClass('active')) {
                        $('#a2').attr('style', 'visibility:hidden')
                    } else {
                        $('#a2').attr('style', 'visibility:visible')
                    }

                    if ($(".conatainer-table1:first-child").hasClass('active')) {
                        $('#a1').attr('style', 'visibility:hidden')
                    } else {
                        $('#a1').attr('style', 'visibility:visible')

                    }

                }
                //How to create a modal with jquery?
            });

    
        </script>
    @endpush
@endsection
