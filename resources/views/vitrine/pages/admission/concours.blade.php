@extends('app')
@section('content')
    <div class="all-title-box">
        <div class="container text-center">
            <h1>Procédure d'inscription<span class="m_1"></span></h1>
        </div>
    </div>
    <div class="section-title row text-center">
        <div class="col-md-8 offset-md-2">
            <p class="lead"></p>
        </div>
    </div>
    <div class="ctn_infos f modif">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <div class="contenu">
            <h2>Elle se déroule en deux étapes:</h2>
            <p>Les deux étapes se dérouleront dans nos locaux à Sokodé</p>
            <div class="align-text">
                <h2>Des épreuves écrites</h2>
                <p>Pendant le concours</p>
            </div>
            <div class="align-text">
                <h2>Un entretien oral </h2>
                <p>conditionné par la réussite aux épreuves écrites</p>
            </div>
            <p>Vous serez évalués sur trois matières </p>
            <h2>Français</h2>
            <h2>Anglais</h2>

            <h2>Mathématique</h2><h2>(sans l'étude des fonctions ni calcul des intégrales)</h2>
            <p id="frais">Frais d'inscription au concours: <h1 id="red" class="modif lf">10 000 fcfa</h1></p>
            <h2 id="red" class="modif lf">La date du prochain concours est le 29 septembre 2022 à 7h00 </h2>
        </div>
    </div>
@endsection

@push('js')
    <script src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyCKjLTXdq6Db3Xit_pW_GK4EXuPRtnod4o">
    </script>

    <script src="{{ asset('vitrine/js/mapsed.js') }}"></script>
    <script src="{{ asset('vitrine/js/01-custom-places-example.js') }}"></script>
@endpush
