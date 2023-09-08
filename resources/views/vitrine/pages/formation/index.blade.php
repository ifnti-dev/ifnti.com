@extends('app')
@section('content')
    <div class="all-title-box">
        <div class="container text-center">
            <h1>Nos programmes<span class="m_1">Institut de Formation aux Normes et Technologies de l'informatique</span></h1>
        </div>
    </div>


    <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="message-box">
                        <ul class="nav nav-pills nav-stacked" id="myTabs">
                            <li><a href="{{ route('formation.cours-bd') }}" >Bases de données</a></li>
                            <li><a href="{{ route('formation.cours-programmation') }}" >Programmation</a></li>
                            <li><a href="{{ route('formation.cours-ao') }}" >Architecture des ordinateurs</a></li>
                            <li><a href="{{ route('formation.cours-rs') }}" >Sécurité et réseaux</a></li>
                            <li><a href="{{ route('formation.cours-se') }}" >Système d'exploitation </a></li>
                            <li><a href="{{ route('formation.general') }}" >Matières générales</a></li>
                        </ul>
                    </div>
                </div>
            </div>
@endsection
