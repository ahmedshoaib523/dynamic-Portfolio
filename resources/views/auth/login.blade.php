<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ isset($title) ? $title : 'Sign In' }}</title>
    <link rel="icon" href="{{ asset('assets/admin/images/fav-icon.png') }}" type="image/png" sizes="">
    <link href="https://site-assets.fontawesome.com/releases/v6.0.0/css/all.css" rel="stylesheet">
    <link href="{{ asset('assets/admin/vendors/iconic-fonts/font-awesome/css/all.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/admin/vendors/iconic-fonts/flat-icons/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/vendors/iconic-fonts/cryptocoins/cryptocoins.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/admin/vendors/iconic-fonts/cryptocoins/cryptocoins-colors.css') }}">
    <link href="{{ asset('assets/admin/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/admin/css/jquery-ui.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/admin/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/admin/css/morris.css') }}" rel="stylesheet">
</head>

<body>
    <div class="ms-content-wrapper ms-auth">
        <div class="ms-auth-container">
            <div class="ms-auth-col">
                <div class="ms-auth-bg"></div>
            </div>
            <div class="ms-auth-col">
                <div class="ms-auth-form">
                    <form class="needs-validation" method="POST" action="{{ route('login') }}" novalidate="">
                        @csrf
                        <h1>Sign in your account</h1>
                        <p>Please enter your email and password to continue</p>
                        <div class="mb-3">
                            <label for="validationCustom01">{{ __('Email Address') }}</label>
                            <div class="input-group">
                                <input id="email" type="email"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autocomplete="email" autofocus
                                    id="validationCustom01">
                                @error('email')
                                    <div class="invalid-feedback" role="alert">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-2">
                            <label for="validationCustom02">{{ __('Password') }}</label>
                            <div class="input-group">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="current-password" id="validationCustom02">

                                @error('password')
                                    <div class="invalid-feedback" role="alert">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="ms-checkbox-wrap">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                    {{ old('remember') ? 'checked' : '' }}>
                                <i class="ms-checkbox-check"></i>
                            </label>
                            <span>{{ __('Remember Me') }}</span>
                        </div>
                        <button class="btn btn-primary mt-4 d-block w-100" type="submit">Sign In</button>
                        <div class="form-group">
                            <label class="d-block mt-3">
                                @if (Route::has('password.request'))
                                    <a class="btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </label>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

<script src="{{ asset('assets/admin/js/jquery-3.3.1.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/jquery-ui.min.js') }}"></script>
<script src="{{ asset('assets/admin/js/framework.js') }}"></script>
<script src="{{ asset('assets/admin/js/settings.js') }}"></script>

</html>
