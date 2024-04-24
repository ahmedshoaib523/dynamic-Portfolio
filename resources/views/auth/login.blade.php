<?php $favicon = DB::table('logo')->where('slug', 'favicon')->where('tag', 'logo_fav')->first(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ isset($title) ? $title : 'Login' }}</title>
    <link href="{{ asset('assets/admin/css/bootstrap.css') }}" rel="stylesheet" type="text/css">
    <link rel="icon" href="{{ asset($favicon->value ?? '') }}" type="image/png" sizes="">
    <link href="https://site-assets.fontawesome.com/releases/v6.0.0/css/all.css" rel="stylesheet">
    <link href="{{ asset('assets/admin/css/custom.css') }}" rel="stylesheet" type="text/css">
</head>
<style>
    .account-sec-wrap .account-page .btn-wh{
        width: 100%;
        height: 50px;
    }
</style>
<body>
    <section class="account-sec-wrap">
        <div class="container h-100">
            <div class="row align-items-center justify-content-center h-100">
                <div class="col-12 col-sm-12 col-md-12 col-lg-5 col-xl-5 col-xxl-5">
                    <div class="account-page">
                        <div class="row justify-content-center">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                <!-- <div class="account-img">
                                    <img src="images/hinata.jpg" alt="img" class="img-fluid">
                                </div> -->
                                <h5>Sign in your account</h5>
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                            <div class="input-main">
                                                <label for="">{{ __('Email Address') }}</label>
                                                <input id="email" type="email"
                                                    class="form-control @error('email') is-invalid @enderror"
                                                    name="email" value="{{ old('email') }}" required
                                                    autocomplete="email" autofocus>

                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                            <div class="input-main">
                                                <label for="">{{ __('Password') }}</label>
                                                <input id="password" type="password"
                                                    class="form-control @error('password') is-invalid @enderror"
                                                    name="password" required autocomplete="current-password">

                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember"
                                                    id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                <label class="form-check-label" for="remember">
                                                    {{ __('Remember Me') }}
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                            <div class="btn-box col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 m-auto">
                                                <button type="submit" class="btn btn-primary hvr-bounce-to-right btn-wh">
                                                    {{ __('Login') }}
                                                </button>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                            <div class="button-box d-grid gap-2 col-12">
                                                @if (Route::has('password.request'))
                                                    <a class="text-center text forgot" href="{{ route('password.request') }}">
                                                        {{ __('Forgot Your Password?') }}
                                                    </a>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

<script src="{{ asset('assets/admin/js/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/bootstrap.min.js') }}"></script>

</html>
