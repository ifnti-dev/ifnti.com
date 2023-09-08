@extends('admin.layouts.base')

@section('content')
    <div class="container">
        <div class="mainContainer">
            <div class="formPage">
                <nav class="formCtlBlock">
                    <a href="{{ route('login') }}"
                        class="loginBtn  {{ Str::startsWith(Route::currentRouteName(), 'login') ? 'active' : '' }}"><span>{{ __('Login') }}</span></a>
                    <a href="{{ route('register') }}"
                        class="registerBtn  {{ Str::startsWith(Route::currentRouteName(), 'register') ? 'active' : '' }}"><span>{{ __('Register') }}</span></a>
                </nav>



                @yield('form')



            </div>
        </div>
    </div>
@endsection
