@extends('app')
@section('content')
    <div id="carouselExampleControls" class="carousel slide bs-slider box-slider" data-ride="carousel" data-pause="hover"
        data-interval="false">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleControls" data-slide-to="1"></li>
            <li data-target="#carouselExampleControls" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <div id="home" class="first-section" style="background-image:url('vitrine/images/img/acceil.png');">
                    <div class="dtab">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 text-center">
                                    <div class="big-tagline">
                                        <h2 id="bienvuenue">Bienvuenue à l'<strong>IFNTI </strong><br>
                                            Sokodé</h2>
                                        <p class="lead" id="concour"> Le concours d'entrée pour l'année académique
                                            2024-2025 est
                                            prévu le 29 juillet 2025 à 07H00 dans nos locaux. </p>
                                        <a href="https://forms.gle/wgVHzuGSSbQij73g7" class="hover-btn-new"><span>Je m’inscris</span></a>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <a href="{{route("ifnti.presentation")}}" class="hover-btn-new"><span>En savoir plus</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div id="home" class="first-section" style="background-image:url('vitrine/images/img/p14_wiyao.png');">
                    <div class="dtab">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 text-center">
                                    <div class="big-tagline">
                                        <h2 data-animation="animated zoomInRight">Salle de cours <strong>IFNTI</strong>
                                        </h2>
                                        <p class="lead" data-animation="animated fadeInLeft">Nos salles sont équipées de
                                            matériels récents. </p>
                                        <a href="https://forms.gle/wgVHzuGSSbQij73g7" class="hover-btn-new"><span>Je m’inscris</span></a>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <a href="{{route("ifnti.presentation")}}" class="hover-btn-new"><span>En savoir plus</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div id="home" class="first-section" style="background-image:url('vitrine/images/img/a3.png');">
                    <div class="dtab">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 text-center">
                                    <div class="big-tagline">
                                        <h2 data-animation="animated zoomInRight"><strong>IFNTI</strong> Journée Portes
                                            Ouvertes
                                        </h2>
                                        <p class="lead" data-animation="animated fadeInLeft">Non organisé pour cette année 2024</p>
                                        <a href="https://forms.gle/wgVHzuGSSbQij73g7" class="hover-btn-new"><span>Je m’inscris</span></a>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <a href="{{route("ifnti.presentation")}}" class="hover-btn-new"><span>En savoir plus</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div id="home" class="first-section" style="background-image:url('vitrine/images/img/a1.png');">
                    <div class="dtab">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 text-center">
                                    <div class="big-tagline">
                                        <h2 data-animation="animated zoomInRight"><strong>IFNTI</strong> Cérémonie de
                                            remise de diplômes
                                        </h2>
                                        <p class="lead" data-animation="animated fadeInLeft">Grand succès lors de la
                                            remise des diplômes. Les six candidats ont été diplômés et ont tous eu au moins une
                                            proposition d'emploie...</p>
                                        <a href="https://forms.gle/wgVHzuGSSbQij73g7" class="hover-btn-new"><span>Je m’inscris</span></a>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <a href="{{route("ifnti.presentation")}}" class="hover-btn-new"><span>En savoir plus</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="new-effect carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="fa fa-angle-left" aria-hidden="true"></span>
                <span class="sr-only">Précédant</span>
            </a>

            <a class="new-effect carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="fa fa-angle-right" aria-hidden="true"></span>
                <span class="sr-only">Suivant</span>
            </a>
        </div>
    </div>

    <div id="overviews" class="section wb">
        <div class="container">
            <div class="section-title row text-center">
                <div class="col-md-8 offset-md-2">
                    <h3>À propos</h3>
                    <p class="lead">L'Institut de formation aux normes et technologies de l'informatique (IFNTI) est un
                        institut renommé dédié à l'excellence académique dans le domaine de l'informatique.
                        Avec une approche innovante et axée sur les normes de l'industrie, IFNTI  est situé à proximité 
                        des deux grands Lycées à Sokodé dans un cadre calme, boisé et, offre une formation pratique
                        de qualité supérieure pour préparer les étudiants à une carrière prometteuse dans le domaine de
                        l'informatique. Notre institut est reconnu pour son corps professoral hautement qualifié, son
                        environnement d'apprentissage dynamique et ses partenariats solides avec l'industrie, assurant
                        ainsi une expérience éducative enrichissante et pertinente pour les étudiants.
                    </p>
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="message-box">
                        <h4>L’Institut de formation aux normes et technologies de l’informatique (IFNTI)</h4>
                        <h2>L'excellence en formation informatique. </h2>
                        <p>L' IFNTI est un institut de formation post-bac situé à Sokodé, dans la région centrale du
                            Togo.</p>

                        <p>
                            Il recrute des bachiliers scientifique pour une licence LMD en 3 ans. La formation est orienté
                            sur les elements de competences necessaires aux entreprses. L'accent mis sur les fondements des 
                            technologies de l'information garenti une pérénité d'adaptabilité des apprenants face aux 
                            technologies émergentes.
                        </p>
                        {{-- <p> Fondé en 2009, il est destiné aux bacheliers et aux étudiants souhaitant se réorienter.
                            L’IFNTI dispense une formation supérieure en licence de type LMD en informatique. L’IFNTI
                            est une Association à but non lucratif (ASBL). . </p> --}}

                        <a href="{{route("ifnti.presentation")}}" class="hover-btn-new orange"><span>En savoir plus</span></a>
                    </div>
                </div>

                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="post-media wow fadeIn">
                        <img src="{{ asset('vitrine/images/img/batiment_ifnti.png') }}" alt="" class="img-fluid img-rounded">
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="post-media wow fadeIn">
                        <img src="{{ asset('vitrine/images/img/personnel_califi.png') }}" alt="" class="img-fluid img-rounded">
                    </div>
                </div>

                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                    <div class="message-box modif hafiz span">
                        <h4>Construisez votre avenir dès maintenant.</h4>
                        <h2>Pourquoi choisir
                            l'IFNTI?</h2>
                        <span>
                            <i class="fa fa-angle-right"></i>Notre formation répond aux besoins du marché du
                            travail
                        </span><br>
                        <span>
                            <i class="fa fa-angle-right"></i>
                            Nous limitons nos effectifs à 24 étudiants par promotion ce qui donne un taux d'encadrement 
                            très élévé, gage d'un apprentissage de qualité
                        </span>
                        <span><br>
                            <i class="fa fa-angle-right"></i>Nous disposons des équipements informatiques dédiés
                            et accessibles à
                            chaque étudiant</span>
                        <span><br>
                            <i class="fa fa-angle-right"></i>L'équipe pédagogique est dynamique et toujours à
                            l'écoute des
                            apprenants</span>
                        <span><br>
                            <i class="fa fa-angle-right"></i>Nous avons plusieurs partenariats
                            internationaux</span>
                        <span><br>
                            <i class="fa fa-angle-right"></i>Le taux d'employabilité est très fort du faite des compétences acquisent par les étudiants a la sortie
                        </span>
                    </div>
                </div>
                <div class="message-box modif hafiz span">
                    <span><br>
                        <i class="fa fa-angle-right"></i>Nous disposons des équipements informatiques dédiés
                        et accessibles à
                        chaque étudiant</span>
                    <span><br>
                        <i class="fa fa-angle-right"></i>Nous encourageons les filles dans le domaine des TICs
                        en décernant chaque
                        année un prix <br>
                        féminin (prix MISS TIC) à la meilleure étudiante</span>
                    <span><br>
                        <i class="fa fa-angle-right"></i>Nous valorisons la créativité et l'efficacité de nos étudiants
                        par le prix
                        du meilleur projet ( individuel ou en équipe) <br> remis tous les ans.
                    </span>
                    <span><br>
                        <i class="fa fa-angle-right"></i>Notre diplôme est reconnu par l'état togolais
                    </span><br>
                    <a href="{{route("actualite")}}" class="hover-btn-new orange" style="margin-top: 10px;"><span>En savoir
                            plus</span></a>
                </div>
            </div>
        </div>
    </div>

    <section class="section lb page-section">
        <div class="container">
            <div class="section-title row text-center">
                <div class="col-md-8 offset-md-2">
                    <h3>Notre histoire</h3>
                    <p class="lead">Découvrez l'évolution de l'IFNTI. Un parcours passionnant qui façonne l'avenir de
                        la formation en informatique.</p>
                </div>
            </div>
            <div class="timeline">
                <div class="timeline__wrap">
                    <div class="timeline__items">
                        <div class="timeline__item">
                            <div class="timeline__content img-bg-01">
                                <h2>2009</h2>
                                <p>
                                    Fondé en 2009, il est destiné aux bacheliers et aux étudiants souhaitant se
                                    réorienter. L'IFNTI dispense une formation supérieure en informatique. </p>
                            </div>
                        </div>
                        <div class="timeline__item">
                            <div class="timeline__content img-bg-02">
                                <h2>2009 - 2013</h2>
                                <p>
                                    Création, installation et négociation avec les partenaires en particulier l'ambassade de 
                                    France qui aurra financé les premiers équipements
                                </p>
                            </div>
                        </div>
                        <div class="timeline__item">
                            <div class="timeline__content img-bg-03">
                                <h2>2013 - 2014</h2>
                                <p>Initialement, la formation était un complément de formation au BTS en deux semestres.
                                    En 2014, la formation est passée sur un format licence en 6 semestres.</p>
                            </div>
                        </div>
                        <div class="timeline__item">
                            <div class="timeline__content img-bg-04">
                                <h2>2019</h2>
                                <p>L'Institut de formation aux normes et technologies de l'informatique (IFNTI) est un
                                    institut de formation post-bac situé à Sokodé, dans la région centrale du Togo.</p>
                            </div>
                        </div>
                        <div class="timeline__item">
                            <div class="timeline__content img-bg-01">
                                <h2>2021</h2>
                                <p>Création par les étudiants(sous la supervision de leur professeur) d'une imprim	ante 3D.
                                	permettant de produire des objets de tout type avec des proportions personnalisées et un matériau spécifique.</p>
                            </div>
                        </div>
                        <div class="timeline__item">
                            <div class="timeline__content img-bg-02">
                                <h2>2022</h2>
                                <p>Instauration du prix spécial "Miss TIC", un geste significatif à l'étudiante au parcours le plus inspirant.</p>
                            </div>
                        </div>
                        <div class="timeline__item">
                            <div class="timeline__content img-bg-04">
                                <h2>2023</h2>
                                <p>Instauration du prix "The Best Programmer" primant l'équipe étudiante ayant présenté le meilleur projet informatique.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="section cl">
        <div class="container">
            <div class="message-box">
                <h4>Nos valeurs</h4>
            </div>
            <div class="row text-left stat-wrap">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <h3>Responsabilité</h3>
                    <span data-scroll class="global-radius icon_wrap effect-1 alignleft">
                        <img src="{{ asset('vitrine/images/img/Protect Cloud-2.svg') }}" alt="">
                    </span><br>
                    <strong>L'IFNTI transmet du savoir et du savoir-faire des technologies informatique en
                        privilégiant le sens de la responsabilité.</strong>
                </div>

                <div class="col-md-4 col-sm-4 col-xs-12">
                    <h3>Compétence</h3>
                    <span data-scroll class="global-radius icon_wrap effect-1 alignleft">
                        <img src="{{ asset('vitrine/images/img/Protect Cloud-3.svg') }}" alt="">
                    </span>
                    <strong>Équipé de matériels récents, l’IFNTI emploie des formateurs à plein temps, de niveau
                        ingénieur,
                        ayant une expérience universitaire.</strong>
                </div>

                <div class="col-md-4 col-sm-4 col-xs-12">
                    <h3>Excellence</h3>
                    <span data-scroll class="global-radius icon_wrap effect-1 alignleft">
                        <img src="{{ asset('vitrine/images/img/Protect Cloud-4.svg') }}" alt="">
                    </span>
                    <strong>L’IFNTI participe ainsi à l’effort national en offrant à la sous-région une formation de
                        haute
                        qualité, à la fois qualifiante pour des compétences techniques et diplômantes.
                    </strong>
                </div>
            </div>
        </div>
    </div>

    <div id="plan" class="section lb">
        <div class="container">
            <div class="section-title text-center">
                <h3>Actualité</h3>
            </div>

            <hr class="invis">


            @include('vitrine.composants.actualite')


            <hr class="hr3">
            {{--@include('vitrine.composants.partenaire')--}}

        </div>
    </div>
@endsection
@push('js')
    <script src="{{ asset('vitrine/js/timeline.min.js') }}"></script>
    <script>
        timeline(document.querySelectorAll('.timeline'), {
            forceVerticalMode: 700,
            mode: 'horizontal',
            verticalStartPosition: 'left',
            visibleItems: 4
        });
    </script>
@endpush
