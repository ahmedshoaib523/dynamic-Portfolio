<?php $favicon = DB::table('logo')->where('slug', 'favicon')->where('tag', 'logo_fav')->first(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ isset($title) ? $title : 'Reset Password' }}</title>
    <link rel="icon" href="{{ asset($favicon->value ?? '') }}" type="image/png" sizes="">
    <link href="{{ asset('assets/admin/css/bootstrap.css') }}" rel="stylesheet" type="text/css">
    <link rel="icon" href="{{ asset('assets/admin/images/fav-icon.png') }}" type="image/png" sizes="">
    <link href="https://site-assets.fontawesome.com/releases/v6.0.0/css/all.css" rel="stylesheet">
    <link href="{{ asset('assets/admin/css/custom.css') }}" rel="stylesheet" type="text/css">
</head>

<body>
    <section class="account-sec-wrap">
        <div class="container h-100">
            <div class="row align-items-center justify-content-center h-100">
                <div class="col-12 col-sm-12 col-md-12 col-lg-5 col-xl-5 col-xxl-5">
                    <div class="account-page">
                        <div class="row justify-content-center">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif
                                <h5>Sign in your account</h5>
                                <form method="POST" action="{{ route('password.email') }}">
                                    @csrf
                                    <div class="row">
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                            <div class="form-group">
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
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12 mt-2">
                                            <div class="button-box d-grid gap-2 col-12 mx-auto">
                                                <button type="submit" class="btn btn-primary hvr-bounce-to-right btn-wh">
                                                    {{ __('Send Password Reset Link') }}
                                                </button>
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
