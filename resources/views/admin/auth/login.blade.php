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
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="{{ asset('backend') }}/ assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('backend') }}/assets/images/favicon.png" type="image/x-icon">
    <meta name="csrf-token" content="ma26LMX2OGIrAGpcmD2t17kcnz7URg3jmt9eheM3">
    <title>Endless - Premium Laravel Admin Template</title>
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend') }}/assets/css/fontawesome.css">
    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend') }}/assets/css/icofont.css">
    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend') }}/assets/css/themify.css">
    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend') }}/assets/css/flag-icon.css">
    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend') }}/assets/css/feather-icon.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend') }}/assets/css/chartist.css">
    <!-- Plugins css start-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend') }}/assets/css/prism.css">
    <!-- Plugins css Ends-->
    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend') }}/assets/css/bootstrap.css">
    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend') }}/assets/css/style.css">
    <link rel="stylesheet" type="text/css" id="color" href="{{ asset('backend') }}/assets/css/light-1.css" media="screen">
    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend') }}/assets/css/responsive.css">
</head>
<body>
<!-- Loader starts-->
    <div class="loader-wrapper">
      <div class="loader bg-white">
        <div class="whirly-loader"> </div>
      </div>
    </div>
    <!-- Loader ends-->
    <!-- page-wrapper Start-->
<div class="page-wrapper">
      <!-- Page Body Start-->
      <!-- login page start-->
<div class="authentication-main">
  <div class="row">
    <div class="col-md-12">
      <div class="auth-innerright">
        <div class="authentication-box">
          <div class="text-center"><img src="../assets/images/endless-logo.png" alt=""></div>
          <div class="card mt-4">
            <div class="card-body">
              <div class="text-center">
                <h4>LOGIN</h4>
                <h6>Enter your Username and Password </h6>
              </div>
              <form method="POST" class="theme-form" action="{{ route('login') }}">
                @csrf

                <div class="form-group">
                  <label for="email" class="col-form-label pt-0">Your Email</label>
                  <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>
                <div class="form-group">
                  <label class="col-form-label">Password</label>
                  <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>
                <div class="checkbox p-0">
                  <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                  <label for="checkbox1">Remember me</label>
                </div>
                <div class="form-group form-row mt-3 mb-0">
                  <button class="btn btn-primary btn-block" type="submit">Login</button>
                </div>
                <div class="form-group form-row mt-3 mb-0">
                  @if (Route::has('password.request'))
                    <a class="btn btn-primary btn-block" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                </div>
                <div class="login-divider"></div>
                <div class="social mt-3">
                  <div class="form-group btn-showcase d-flex">
                    <button class="btn social-btn btn-fb d-inline-block"> <i class="fa fa-facebook"></i></button>
                    <button class="btn social-btn btn-twitter d-inline-block"><i class="fa fa-google"></i></button>
                    <button class="btn social-btn btn-google d-inline-block"><i class="fa fa-twitter"></i></button>
                    <button class="btn social-btn btn-github d-inline-block"><i class="fa fa-github"></i></button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- login page end-->
      <!-- Page Body End-->
    </div>
    <script src="{{ asset('backend') }}/assets/js/jquery-3.2.1.min.js"></script>
<!-- Bootstrap js-->
<script src="{{ asset('backend') }}/assets/js/bootstrap/popper.min.js"></script>
<script src="{{ asset('backend') }}/assets/js/bootstrap/bootstrap.js"></script>
<!-- feather icon js-->
<script src="{{ asset('backend') }}/assets/js/icons/feather-icon/feather.min.js"></script>
<script src="{{ asset('backend') }}/assets/js/icons/feather-icon/feather-icon.js"></script>
<!-- Sidebar jquery-->
<script src="{{ asset('backend') }}/assets/js/sidebar-menu.js"></script>
<!-- Theme Config -->
<script src="{{ asset('backend') }}/assets/js/config.js"></script>
  
<script src="{{ asset('backend') }}/assets/js/chart/chartist/chartist.js"></script>
<script src="{{ asset('backend') }}/assets/js/chart/knob/knob.min.js"></script>
<script src="{{ asset('backend') }}/assets/js/chart/knob/knob-chart.js"></script>
<script src="{{ asset('backend') }}/assets/js/prism/prism.min.js"></script>
<script src="{{ asset('backend') }}/assets/js/clipboard/clipboard.min.js"></script>
<script src="{{ asset('backend') }}/assets/js/counter/jquery.waypoints.min.js"></script>
<script src="{{ asset('backend') }}/assets/js/counter/jquery.counterup.min.js"></script>
<script src="{{ asset('backend') }}/assets/js/counter/counter-custom.js"></script>
<script src="{{ asset('backend') }}/assets/js/custom-card/custom-card.js"></script>
<script src="{{ asset('backend') }}/assets/js/notify/bootstrap-notify.min.js"></script>
<script src="{{ asset('backend') }}/assets/js/dashboard/default.js"></script>
<script src="{{ asset('backend') }}/assets/js/notify/index.js"></script>
<script src="{{ asset('backend') }}/assets/js/height-equal.js"></script>
<script src="{{ asset('backend') }}/assets/js/typeahead/handlebars.js"></script>
<script src="{{ asset('backend') }}/assets/js/typeahead/typeahead.bundle.js"></script>
<script src="{{ asset('backend') }}/assets/js/typeahead/typeahead.custom.js"></script>
<script src="{{ asset('backend') }}/assets/js/chat-menu.js"></script>
<script src="{{ asset('backend') }}/assets/js/tooltip-init.js"></script>
<script src="{{ asset('backend') }}/assets/js/typeahead-search/handlebars.js"></script>
<script src="{{ asset('backend') }}/assets/js/typeahead-search/typeahead-custom.js"></script>
<!--https://developer.here.com/api-explorer/maps-js/v3.0/maps/map-scale-bar-changing-from-the-metric-system-->
<!--https://designreset.com/preview-equation/default/map_jhere.html-->
<!-- Plugins JS Ends-->
<!-- Theme js-->
<script src="{{ asset('backend') }}/assets/js/script.js"></script>
<script src="{{ asset('backend') }}/assets/js/theme-customizer/customizer.js"></script>
</body>
</html>
