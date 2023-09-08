@extends('auth.layouts.formBase')

@section('form')

                <div class="login formBlock {{ Str::startsWith(Route::currentRouteName(), 'login') ? 'active' : '' }}"
                    id="tab-1">
                    <form name="loginform" method="POST" action="{{ route('login') }}">
                        @csrf
                        <p>{{ __('Login to your account:') }}</p>
                        <div class="form-group">
                            <input type="email" name="email" id="eamil" placeholder="email" autocomplete="email"
                                autofocus class="@error('email') is-invalid @enderror" />

                            @error('email')
                                <p class="error" role="alert">
                                    <strong>{{ $message }}</strong>
                                </p>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" id="password" placeholder="Password"
                                class=" @error('password') is-invalid @enderror" autocomplete="current-password" />
                            @error('password')
                                <p class="error" role="alert">
                                    <strong>{{ $message }}</strong>
                                </p>
                            @enderror
                        </div>
                        {{--
                        <div class="form-group remember-block">
                            <label class="" for="remember"> {{ __('Remember Me') }} </label>
                            <input class="" type="checkbox" name="remember" id="remember"
                                {{ old('remember') ? 'checked' : '' }} />
                        </div> --}}

                        <div class="form-group alignRight">
                            @if (Route::has('password.request'))
                                <a class="pwdForget" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}</a>
                            @endif
                            <button type="submit"> {{ __('Login') }}</button>
                        </div>
                    </form>
                </div>

@endsection
