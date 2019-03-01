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
  <link href="{{ asset('materialize/css/materialize.css') }}" rel="stylesheet">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

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
              <a class="active-link" href="index.html">Home</a>
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
              <a href="index.html">
                <i class="fa fa-home grey-text text-darken-4"></i> Home</a>
            </li>
            <li>
              <a href="solutions.html">
                <i class="fa fa-cog grey-text text-darken-4"></i> Solutions</a>
            </li>
            <li>
              <a href="signup.html">
                <i class="fa fa-users grey-text text-darken-4"></i> Sign Up</a>
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
        <div class="col s12 m10 center">
          <h5>Welcome To Quazzu</h5>
          <h1>Build For The Future</h1>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sit fugit deserunt quos provident aliquam inventore.</p>
          <br>
          <br>
          <a href="solutions.html" class=" white purple-text waves-effect waves-light btn-large">Learn More</a>
          <a href="signup.html" class="purple white-text waves-effect waves-light btn-large">Sign Up</a>
        </div>
      </div>
    </div>
  </header>

  <!-- Section: Icon Boxes -->
  <section class="section section-icons center">
    <div class="container">
      <div class="row" data-aos="fade-right">
        <div class="col s12 m4">
          <div class="card-panel">
            <i class="fa fa-user fa-3x deep-purple-text text-darken-2"></i>
            <h5 class="grey-text text-darken-4">Free Account</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, suscipit!</p>
          </div>
        </div>
        <div class="col s12 m4">
          <div class="card-panel">
            <i class="fa fa-database fa-3x deep-purple-text text-darken-2"></i>
            <h5 class="grey-text text-darken-4">NoSQL Databases</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, suscipit!</p>
          </div>
        </div>
        <div class="col s12 m4">
          <div class="card-panel">
            <i class="fa fa-bolt fa-3x deep-purple-text text-darken-2"></i>
            <h5 class="grey-text text-darken-4">Fast Conections</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad, suscipit!</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section: About -->
  <section class="section section-about grey lighten-4">
    <div class="container">
      <div class="row" data-aos="fade-right">
        <div class="col s12 m6">
          <h3>
            <span class="deep-purple-text text-darken-1">About</span> Us</h3>
          <p class="flow-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid odio eum magnam aut at voluptates omnis sint reiciendis
            dolorem recusandae.</p>
        </div>
        <div class="col s12 m6">
          <img src="img/tech.jpg" alt="" class="circle responsive-img">
        </div>
      </div>
    </div>
  </section>

  <!-- Section: Developers -->
  <section class="section section-developers white-text">
    <div class="primary-overlay valign-wrapper">
      <div class="container">
        <div class="row">
          <div class="col s12 center">
            <h3>For Developers, By Developers</h3>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section: Languages -->
  <section class="section section-language grey lighten-4">
    <div class="container">
      <div class="row" data-aos="zoom-in">
          <div class="text-center col">
            <h4 class=" pb-5">Work With
              <span class="deep-purple-text text-darken-1"> Any Language</span>
            </h4>
          </div>

        <div class="row" data-aos="zoom-in-down">
          <div class="col s2">
            <img src="img/python-logo.png" class="responsive-img" alt="">
          </div>
          <div class="col s2">
            <img src="img/ruby-logo.png" class="responsive-img" alt="">
          </div>
          <div class="col s2">
            <img src="img/php-logo.png" class="responsive-img" alt="">
          </div>
          <div class="col s2">
            <img src="img/node-logo.png" class="responsive-img" alt="">
          </div>
          <div class="col s2">
            <img src="img/c-sharp-logo.png" class="responsive-img" alt="">
          </div>
          <div class="col s2">
            <img src="img/java-logo.png" class="responsive-img" alt="">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section: Podcast -->
  <section class="section section-podcast white-text">
    <div class="primary-overlay valign-wrapper">
      <div class="container">
        <div class="row" data-aos="zoom-out">
          <div class="col s12 m8">
            <h4>Listen to the Quazzu Podcast</h4>
            <p>Every Thursday at 5pm EST</p>
          </div>
          <div class="col s12 m4">
            <a href="#" class="purple text-white waves-effect waves-light btn-large">
              <i class="fa fa-podcast"></i> Listen
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Section: Testimonial -->
  <section class="section section-testimonial grey lighten-4">
    <div class="container">
      <div class="row" data-aos="zoom-out">
        <div class="col s12">
          <div class="carousel carousel-slider center">
            <div class="carousel-item" href="#one!">
              <h2>Testimonial 1</h2>
              <p class="flow-text">"Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugiat assumenda ad minima reiciendis vitae fuga,
                dicta ipsa sit maxime aperiam quo animi expedita adipisci officia hic, odio omnis temporibus earum?"
                <p>
                  <em>- John Doe From Microsystems</em>
                </p>
              </p>
              <div class="carousel-fixed-item center hide-on-small-and-down">
                <a href="#" class="btn grey">Read More</a>
              </div>
            </div>
            <div class="carousel-item" href="#two!">
              <h2>Testimonial 2</h2>
              <p class="flow-text">"Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugiat assumenda ad minima reiciendis vitae fuga,
                dicta ipsa sit maxime aperiam quo animi expedita adipisci officia hic, odio omnis temporibus earum?"
                <p>
                  <em>- Mike SMith From Edge INC</em>
                </p>
              </p>
              <div class="carousel-fixed-item center hide-on-small-and-down">
                <a href="#" class="btn grey">Read More</a>
              </div>
            </div>
            <div class="carousel-item" href="#three!">
              <h2>Testimonial 3</h2>
              <p class="flow-text">"Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugiat assumenda ad minima reiciendis vitae fuga,
                dicta ipsa sit maxime aperiam quo animi expedita adipisci officia hic, odio omnis temporibus earum?"
                <p>
                  <em>- Karen Williams from Techsoft</em>
                </p>
              </p>
              <div class="carousel-fixed-item center hide-on-small-and-down">
                <a href="#" class="btn grey">Read More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="page-footer deep-purple lighten-1">
    <div class="container">
      <div class="row" data-aos="zoom-out-left">
        <div class="col l6 s12">
          <h5 class="white-text">About Us</h5>
          <p class="grey-text text-lighten-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti ducimus, hic id quod enim voluptate </p>
        </div>
        <div class="col l4 offset-l2 s12">
          <h5 class="white-text">Links</h5>
          <ul>
            <li>
              <a class="grey-text text-lighten-3" href="index.html">Home 1</a>
            </li>
            <li>
              <a class="grey-text text-lighten-3" href="solutions.html">Solutions</a>
            </li>
            <li>
              <a class="grey-text text-lighten-3" href="signup.html">Signup</a>
            </li>

          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright deep-purple darken-1" data-aos="fade-up"
     data-aos-duration="3000">
      <div class="container">
        Quazzu &copy; 2018
        <a class="grey-text text-lighten-4 right" href="#!">Terms & Conditions</a>
      </div>
    </div>
  </footer>


  <!-- Login Modal -->
  <div id="login-modal" class="modal">
    <div class="modal-content">
      <h4>Account Login</h4>
      <p>Login to access your account dashboard</p>
      <form>
        <div class="input-field">
          <input type="email" id="email">
          <label for="email">Email</label>
        </div>
        <div class="input-field">
          <input type="password" id="password">
          <label for="password">Password</label>
        </div>
      </form>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close btn grey">
        <i class="fa fa-sync"></i> Reset Password</a>
      <a href="#!" class="modal-action modal-close btn purple">
        <i class="fa fa-lock"></i> Login</a>
    </div>
  </div>


</body>

</html>
