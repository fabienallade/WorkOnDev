<!DOCTYPE html>
<html>

<head>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Scripts -->
  <script src="{{ asset('materialize/js/materialize.js') }}" defer></script>
  <script src="{{ asset('js/app.js') }}" defer></script>

  <!-- Styles -->
  <link href="{{ asset('materialize.css') }}" rel="stylesheet">
  <link href="{{ asset('site.css') }}" rel="stylesheet">

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Quazzu Cloud Hosting</title>
</head>

<body>
  <!-- Header -->
  <header class="main-header">
    <nav class="transparent">
      <div class="container">
        <div class="nav-wrapper">
          <a href="#" class="brand-logo">Quazzu</a>
          <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
          </a>
          <ul class="right hide-on-med-and-down">
            <li>
              <a class="active-link" href="{{ route('/') }}">Home</a>
            </li>
            <li>
              <a href="{{ route('solutions') }}">Solutions</a>
            </li>
            <li>
              <a href="{{ route('signup') }}">Sign Up</a>
            </li>
            <li>
              <a href="{{ route('mon_cv') }}">Mon Cv</a>
            </li>
            <li>
              <a href="#login-modal" class="btn purple modal-trigger">Login</a>
            </li>
            <li>
              <a href="https://facebook.com">
                <i class="fab fa-facebook"></i>
              </a>
            </li>
            <li>
              <a href="https://twitter.com">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li>
              <a href="https://instagram.com">
                <i class="fab fa-instagram"></i>
              </a>
            </li>
          </ul>
          <ul class="sidenav" id="mobile-nav">
            <h4 class="purple-text text-darken-4 center">Quazzu</h4>
            <li>
              <div class="divider"></div>
            </li>
            <li>
              <a href="{{ route('/') }}">
                <i class="fa fa-home grey-text text-darken-4"></i> Home</a>
            </li>
            <li>
              <a href="{{ route('solutions') }}">
                <i class="fa fa-cog grey-text text-darken-4"></i> Solutions</a>
            </li>
            <li>
              <a href="{{ route('signup') }}">
                <i class="fa fa-users grey-text text-darken-4"></i> Sign Up</a>
            </li>
            <li>
              <a href="{{ route('mon_cv') }}">
                <i class="fa fa-users grey-text text-darken-4"></i> Mon cv</a>
            </li>
            <li>
              <div class="divider"></div>
            </li>
            <li>
              <a href="#" class="btn purple">Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Showcase -->
    <div class="showcase container" data-aos="fade-down" data-aos-duration="1000">
      <div class="row">
        <div class="col s12 m10 offset-m1 center">
          <h5>Welcome To Quazzu</h5>
          <h1>Build For The Future</h1>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sit fugit deserunt quos provident aliquam inventore.</p>
          <br>
          <br>
            <a href="solutions.html" class="purple white-text waves-effect waves-light btn btn-large btn-padding ">Learn More</a>
            <a href="signup.html" class=" white purple-text waves-effect waves-light btn btn-large btn-padding ">Sign Up</a>
        </div>
      </div>
    </div>
  </header>
  <div class="fixed-action-btn">
  <a class="btn-floating btn-large red">
    <i class="large material-icons">keyboard_arrow_up</i>
  </a>
</div>
    @yield('content')
