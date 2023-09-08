@extends('admin.layouts.base')
@section('content')
    @include('admin.composants.dash.svg')
    <header class="page-header">
        <nav>
            <a href="#" aria-label="forecastr logo" class="logo">
                <img sizes="(min-width: 700px) 1200px,(min-width: 50px)
                300px"
                    srcset="{{ asset('admin/images/logotext-600.png') }} 700w,
                {{ asset('admin/images/logotext.png') }} 300w,"
                    src="{{ asset('admin/images/logotext.png') }}" />

            </a>
            <button class="toggle-mob-menu" aria-expanded="false" aria-label="open menu">
                <svg width="20" height="20" aria-hidden="true">
                    <use xlink:href="#down"></use>
                </svg>
            </button>
            <ul class="admin-menu">
                <li class="menu-heading">
                    <h3>Admin</h3>
                </li>
                {{-- <li>
                    <a href="#0">
                        <svg>
                            <use xlink:href="#pages"></use>
                        </svg>
                        <span>Pages</span>
                    </a>
                </li>
                <li>
                    <a href="#0">
                        <svg>
                            <use xlink:href="#users"></use>
                        </svg>
                        <span>Users</span>
                    </a>
                </li>
                <li>
                    <a href="#0">
                        <svg>
                            <use xlink:href="#trends"></use>
                        </svg>
                        <span>Trends</span>
                    </a>
                </li> --}}
                <li>
                    <a href="{{ route('sessionConcours') }}">
                        <svg>
                            <use xlink:href="#collection"></use>
                        </svg>
                        <span>Sessions concours</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('dossier.index')}}">
                        <svg>
                            <use xlink:href="#comments"></use>
                        </svg>
                        <span>Dossiers</span>
                    </a>
                </li>
               <li>
                    <a href="{{route("entretiens")}}">
                        <svg>
                            <use xlink:href="#appearance"></use>
                        </svg>
                        <span>Entretiens</span>
                    </a>
                </li>{{--
                <li class="menu-heading">
                    <h3>Settings</h3>
                </li>
                <li>
                    <a href="#0">
                        <svg>
                            <use xlink:href="#settings"></use>
                        </svg>
                        <span>Settings</span>
                    </a>
                </li>
                <li>
                    <a href="#0">
                        <svg>
                            <use xlink:href="#options"></use>
                        </svg>
                        <span>Options</span>
                    </a>
                </li>
                <li>
                    <a href="#0">
                        <svg>
                            <use xlink:href="#charts"></use>
                        </svg>
                        <span>Charts</span>
                    </a>
                </li> --}}
                <li>
                    <div class="switch">
                        <input type="checkbox" id="mode" checked>
                        <label for="mode">
                            <span></span>
                            <span>Dark</span>
                        </label>
                    </div>
                    <button class="collapse-btn" aria-expanded="true" aria-label="collapse menu">
                        <svg aria-hidden="true">
                            <use xlink:href="#collapse"></use>
                        </svg>
                        <span>Collapse</span>
                    </button>
                </li>
            </ul>
        </nav>
    </header>
    <section class="page-content">
        <section class="search-and-user">
            <form>
                <input type="search" placeholder="Search Pages...">
                <button type="submit" aria-label="submit form">
                    <svg aria-hidden="true">
                        <use xlink:href="#search"></use>
                    </svg>
                </button>
            </form>
            <div class="admin-profile">
                <span class="greeting">{{ Auth::user()->name }}</span>
                <div class="notifications">
                    <span class="badge">1</span>
                    <svg id="showLogout">
                        <use xlink:href="#users"></use>
                    </svg>

                    <div class="logout-conteneur">
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                            <button type="submit" id="logout">
                                <i class="fas fa-sign-out-alt"></i> {{ __('Logout') }}
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <section class="grid">
            <article>
                @yield('action')
            </article>
            {{-- <article></article>
            <article></article>
            <article></article>
            <article></article>
            <article></article>
            <article></article>
            <article></article> --}}
        </section>
        <footer class="page-footer">
            <span>made by </span>
            <a href="https://dev.ifnti.com/" target="_blank">
                <img width="24" height="24" src="{{ asset('admin/images/logo.png') }}" alt="George Martsoukos logo">
            </a>
        </footer>
    </section>
    <!-- partial -->
    @push('js')
        <script src="{{ asset('admin/js/jquery.min.js') }}"></script>
        <script>
            $(function() {
                $('#showLogout').click(function(e) {
                    $(".logout-conteneur").slideToggle("slow");
                })
            })
        </script>
    @endpush
@endsection
