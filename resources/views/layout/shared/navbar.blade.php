<header class="top-navbar">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('accueil') }}">
                <img src="{{ asset('vitrine/images/img/logoIfnti1.png') }}" alt="ifnti" />
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-host"
                aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbars-host">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item {{ Route::currentRouteName() === 'accueil' ? 'active' : '' }}"><a
                        class="nav-link" href="{{ route('accueil') }}">Accueil</a>
                    </li>
  

                    <li
                        class="nav-item dropdown  {{ Str::startsWith(Route::currentRouteName(), 'ifnti') ? 'active' : '' }}">
                        <a class="nav-link " id="dropdown-a" href="{{ route('ifnti.ifnti') }}">IFNTI </a>
                        <div class="dropdown-menu" aria-labelledby="dropdown-a">
                            <a class="dropdown-item" href="{{ route('ifnti.presentation') }}">Présentation </a>
                            <a class="dropdown-item" href="{{ route('ifnti.professeurs') }}">Professeurs </a>
                            <a class="dropdown-item" href="{{ route('ifnti.etudiants') }}">Etudiants</a>
                        </div>
                    </li>
                    <li
                        class="nav-item dropdown {{ Str::startsWith(Route::currentRouteName(), 'formation') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('formation.all') }} "id="dropdown-a">Formation </a>

                        <div class="dropdown-menu" aria-labelledby="dropdown-a">
                            <a class="dropdown-item" href="{{ route('formation.cours-bd') }}">Base de données</a>
                            <a class="dropdown-item" href="{{ route('formation.cours-se') }}">Système
                                d’exploitation</a>
                            <a class="dropdown-item" href="{{ route('formation.cours-programmation') }}">Programmation
                            </a>
                            <a class="dropdown-item" href="{{ route('formation.cours-rs') }}">Réseaux et sécurité</a>
                            <a class="dropdown-item" href="{{ route('formation.cours-ao') }}">Architecture des
                                ordinateurs</a>
                            <a class="dropdown-item" href="{{ route('formation.general') }}">Matière générales </a>
                        </div>
                    </li>
                    <li
                        class="nav-item dropdown {{ Str::startsWith(Route::currentRouteName(), 'admission') ? 'active' : '' }}">
                        <a class="nav-link" href="{{ route('admission.admission') }}" id="dropdown-a">Admission </a>
                        <div class="dropdown-menu" aria-labelledby="dropdown-a">
                            <a class="dropdown-item" href="{{ route('admission.frais') }}">Frais </a>
                            <a class="dropdown-item" href="{{ route('admission.concours') }}">Concours</a>
                        </div>
                    </li>

                    <li class="nav-item {{ Route::currentRouteName() === 'actualite' ? 'active' : '' }}"><a
                            class="nav-link" href="{{ route('actualite') }}">Actualités</a></li>

                    <li class="nav-item {{ Route::currentRouteName() === 'contact' ? 'active' : '' }}"><a
                            class="nav-link" href="{{ route('contact') }}">Contact</a></li>
                </ul>
                {{-- <ul class="nav navbar-nav navbar-right">
                    <li><a class="hover-btn-new log orange" href="#" data-toggle="modal"
                            data-target="#login"><span>S'abonner</span></a></li>
                </ul> --}}
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <!-- <a class="hover-btn-new log orange" href="https://forms.gle/wgVHzuGSSbQij73g7"><span>Postuler</span></a> -->
                        <a class="hover-btn-new log orange" href="https://forms.gle/wgVHzuGSSbQij73g7"><span>Postuler</span></a>   
                                       
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
