@extends('layouts.auth')

@section('title')
    Login Client Portal
@endsection

@section('content')
    {{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}

    <!-- Page Content -->
    {{-- <div class="page-content page-auth" style="margin: 100px">
        <div class="section-store-auth" data-aos="fade-up">
            <div class="container">
                <div class="row align-items-center row-login">
                    <div class="col-lg-6 text-center">
                        <img src="/images/logo-dashboard.png" alt="" class="w-50 mb-4 mb-lg-none" />
                    </div>
                    <div class="col-lg-5">
                        <h2>
                            Webcare Portal Client <br />
                            Login Admin
                        </h2>
                        <form method="POST" action="{{ route('login') }}" class="mt-3">
                            @csrf
                            <div class="form-group">
                                <label>Email address</label>

                                <input id="email" type="email"
                                    class="form-control w-75 @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input id="password" type="password"
                                    class="form-control w-75 @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-success btn-block w-75 mt-4" href="/login.html">
                                Sign In
                            </button>
                            <a class="btn btn-signup w-75 mt-2" href="{{ route('register') }}">
                                Sign Up
                            </a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <!-- Page Content Responsive -->
    {{-- <div class="page-content page-auth pt-5 pb-5">
        <div class="section-store-auth" data-aos="fade-up">
            <div class="container">
                <div class="row align-items-center row-login justify-content-center">
                    <div class="col-12 col-sm-10 col-md-8 col-lg-6 text-center">
                        <img src="/images/logo-dashboard.jpeg" alt="" class="img-fluid mb-4 mb-lg-0" />
                    </div>
                    <div class="col-12 col-sm-10 col-md-8 col-lg-4">
                        <h2 class="text-center text-lg-left">
                            Webcare Portal Client <br />
                            Login Admin
                        </h2>
                        <form method="POST" action="{{ route('login') }}" class="mt-3">
                            @csrf
                            <div class="form-group">
                                <label>Email address</label>
                                <input id="email" type="email"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password" required
                                    autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-success btn-block mt-4">
                                Sign In
                            </button>
                            <a class="btn btn-outline-secondary btn-block mt-2" href="{{ route('register') }}">
                                Sign Up
                            </a>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div> --}}



    <section class="signinup" style="background-color: white;">
        <div class="container-signinup shadow-lg" style="border-radius: 20px;">
            <div class="user signinBx">
                <div class="imgBx"><img src="/images/signin-up/signin.svg" alt="" /></div>
                <div class="formBx">

                    <form method="POST" action="{{ route('login') }}">
                        <h2>Sign In</h2>
                        @csrf


                        <input id="email" type="email" class=" @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                            placeholder="Email">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror




                        <div class="show-hide">
                            <input type="password" class="@error('password') is-invalid @enderror"
                                name="password" required autocomplete="current-password" placeholder="Password"
                                id="passwordInput">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <span class="icon-show-hide" id="togglePassword"
                                onclick="togglePasswordVisibility(passwordInputId='passwordInput', showPasswordIconId='showPassword', hidePasswordIconId='hidePassword')">
                                <!-- Initially hide.svg is displayed -->
                                <svg class="icon-show" id="hidePassword" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20">
                                    <path
                                        d="m12.81 4.36l-1.77 1.78a4 4 0 0 0-4.9 4.9l-2.76 2.75C2.06 12.79.96 11.49.2 10a11 11 0 0 1 12.6-5.64zm3.8 1.85c1.33 1 2.43 2.3 3.2 3.79a11 11 0 0 1-12.62 5.64l1.77-1.78a4 4 0 0 0 4.9-4.9l2.76-2.75zm-.25-3.99l1.42 1.42L3.64 17.78l-1.42-1.42L16.36 2.22z" />
                                </svg>

                                <!-- Initially show.svg is hidden -->
                                <svg class="icon-hide" id="showPassword" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 24 24" style="display:none">
                                    <path
                                        d="M12 9a3 3 0 0 0-3 3a3 3 0 0 0 3 3a3 3 0 0 0 3-3a3 3 0 0 0-3-3m0 8a5 5 0 0 1-5-5a5 5 0 0 1 5-5a5 5 0 0 1 5 5a5 5 0 0 1-5 5m0-12.5C7 4.5 2.73 7.61 1 12c1.73 4.39 6 7.5 11 7.5s9.27-3.11 11-7.5c-1.73-4.39-6-7.5-11-7.5Z" />
                                </svg>

                            </span>
                        </div>

                        <input type="submit" name="" value="Login" />
                        <p class="signup">
                            Don't have an account ?
                            <a href="./register" onclick="toggleForm();">Sign Up.</a>
                        </p>
                    </form>
                </div>
            </div>

        </div>
    </section>
@endsection
