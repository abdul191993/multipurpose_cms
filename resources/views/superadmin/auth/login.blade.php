<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'cms') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css" />
  <!-- icons -->
    <link href="{{ asset('fonts/font-awesome/css/font-awesome.min.css') }} " rel="stylesheet" type="text/css"/>
  <link href="{{ asset(' fonts/material-design-icons/material-icon.css" rel="stylesheet" type="text/css') }}" />
    <!-- bootstrap -->
  <link href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css') }}" />
    <!-- style -->
    <link rel="stylesheet" href="{{ asset('assets/css/pages/extra_pages.css') }}">
  <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.ico') }}" /> 
</head>
<body>    
    <div class="form-title">
        <h1>SuperAdmin Login</h1>
    </div>
    <!-- Login Form-->
    <div class="login-form text-center">
        <div class="form formLogin">
            <h2>Login to your account</h2>
           <form method="POST" action="{{ route('login') }}">
                @csrf
                <input id="email" type="email" class=" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                <input id="password" type="password" class=" @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                <div class="remember text-left">
                    <div class="checkbox checkbox-primary">
                        <input type="checkbox" name="remember" id="checkbox2" {{ old('remember') ? 'checked' : '' }}>
                  <label for="checkbox2">Remember me</label>
                    </div>
                </div>
                <button>Login</button>
                <div class="forgetPassword">
                @if (Route::has('password.request'))
                    <a class="forgetPassword" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                </div>
            </form>
        </div>
        <div class="form formReset">
            <h2>Reset your password?</h2>
            <form>
                <input type="email" placeholder="Email Address" />
                <button>Send Verification Email</button>
            </form>
        </div>
    </div>
<!-- start js include path -->
    <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }} " ></script>
    <script src="{{ asset('assets/js/pages/extra_pages/pages.js') }}" ></script>
    <!-- end js include path -->
</body>
</html>
