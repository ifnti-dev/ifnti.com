@extends('app')
@section('content')
    <div class="all-title-box modif audrey banner-mod">
        <div class="container text-center">
            <h1>
                Notre équipe<span class="m_1"> Découvrez notre équipe enseignante dévouée et passionnée à l'IFNTI.</span>
            </h1>
        </div>
    </div>

    <div id="teachers" class="section wb">
        <div class="container">
            <div class="section-title text-center">
                <h3>Conseil d'administration</h3>
            </div>
            @include('vitrine.composants.professeurs.administration')
            <div class="section-title text-center">
                <h3>Conseil scientifique et pédagogique</h3>
            </div>

            @include('vitrine.composants.professeurs.permanents')

            {{-- <div class="section-title text-center">
                <h3>Professeurs vacataires</h3>
            </div> --}}
            {{-- @include('vitrine.composants.professeurs.vacataires') --}}

        </div>
    </div>
@endsection
