@extends('app')
@section('content')
    <div class="all-title-box">
        <div class="container text-center">
            <h1>Coût de la formation<span class="m_1"></span></h1>
        </div>
    </div>

    <div id="pricing-box" class="section wb">
        <div class="container modif cout f">



            <div class="col-md-4 col-sm-6">
                <div class="pricingTable pink">
                    <div class="pricingTable-header">
                        <span class="heading">
                            <h3>Coût</h3>
                        </span>
                        <span>Les deux étapes se dérouleront dans nos locaux à Sokodé.</span>
                    </div>

                    <div class="pricingContent">
                        <i class="fa fa-briefcase"></i>
                        <ul>
                            <li class="li">
                                <div class="frais">
                                    <p>Inscription</p>
                                    <p>30 000 fcfa / an</p>
                                </div>
                            </li>
                            <li class="li">
                                <div class="frais">
                                    <p>Scolarité</p>
                                    <p>590 000 fcfa / an</p>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="pricingTable-sign-up">
                        <a href="{{ asset('admission/concours') }}" class="hover-btn-new orange"><span>Concours</span></a>
                    </div>
                </div>
            </div>



        </div>
    </div>
@endsection
