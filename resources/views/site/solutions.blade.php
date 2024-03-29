@extends('layouts.site')
@section('content')

    <!-- Section: Solutions About -->
    <section class="section section-solutions-about">
      <div class="container">
        <div class="row">
          <div class="col s12 m5">
            <h2>What We Do...</h2>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ab corporis autem assumenda sed labore quo facere dolorum
              suscipit, fuga quam sequi id quaerat, perferendis unde quos soluta incidunt nostrum voluptatum?</p>
          </div>
          <div class="col s12 m6 offset-m1">
            <div class="row">
              <div class="col s12">
                <ul class="tabs">
                  <li class="tab col s4">
                    <a href="#tab1" class="purple-text">Cloud Hosting</a>
                  </li>
                  <li class="tab col s4">
                    <a href="#tab2" class="purple-text">Cloud Storage</a>
                  </li>
                  <li class="tab col s4">
                    <a href="#tab3" class="purple-text">Cloud Database</a>
                  </li>
                </ul>
              </div>
              <div id="tab1" class="col s12">
                <h5>Cloud Hosting</h5>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sunt cupiditate aspernatur aliquam nobis dolorum
                  quae assumenda nemo necessitatibus voluptates deserunt!</p>
              </div>
              <div id="tab2" class="col s12">
                <h5>Cloud Storage</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga, perferendis officia itaque necessitatibus et
                  debitis non eveniet libero quaerat corporis, dignissimos quasi, voluptates sed minus eum pariatur tempore
                  temporibus. Numquam.</p>
              </div>
              <div id="tab3" class="col s12">
                <h5>Cloud Database</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima fugiat, dolore blanditiis commodi velit dignissimos
                  corporis quas modi qui, unde quasi iusto facilis quis in voluptatem neque aut cumque aliquid.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Section: Features -->
    <section class="section section-features grey lighten-3">
      <div class="container">
        <h4 class="purple-text text-darken-1 center">Powerful & Innovative</h4>
        <h6 class="grey-text text-darken-2 center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, eligendi?</h6>
        <br>
        <br>
        <!-- Row 1 -->
        <div class="row">
          <div class="col s12 m4">
            <h5>
              <i class="fa fa-user"></i> Unlimited Users
            </h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis deserunt quo ipsum beatae rerum consequuntur maiores
              voluptates adipisci quaerat sint.</p>
          </div>
          <div class="col s12 m4">
            <h5>
              <i class="fa fa-database"></i> Scalable Data
            </h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis deserunt quo ipsum beatae rerum consequuntur maiores
              voluptates adipisci quaerat sint.</p>
          </div>
          <div class="col s12 m4">
            <h5>
              <i class="fa fa-chart-line"></i> Data Analytics
            </h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis deserunt quo ipsum beatae rerum consequuntur maiores
              voluptates adipisci quaerat sint.</p>
          </div>
        </div>

        <!-- Row 2 -->
        <div class="row">
          <div class="col s12 m4">
            <h5>
              <i class="fa fa-github"></i> Github Integration
            </h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis deserunt quo ipsum beatae rerum consequuntur maiores
              voluptates adipisci quaerat sint.</p>
          </div>
          <div class="col s12 m4">
            <h5>
              <i class="fa fa-plus"></i> Add-ons
            </h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis deserunt quo ipsum beatae rerum consequuntur maiores
              voluptates adipisci quaerat sint.</p>
          </div>
          <div class="col s12 m4">
            <h5>
              <i class="fa fa-hdd"></i> Smart Storage
            </h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis deserunt quo ipsum beatae rerum consequuntur maiores
              voluptates adipisci quaerat sint.</p>
          </div>
        </div>
        <div class="center">
          <a href="signup.html" class="btn btn-large grey">Sign Up For Free</a>
          <br>
          <br>
          <h5>
            <span class="deep-purple-text text-lighten-1">Have a question? </span> Contact our sales team
          </h5>
          <p>sales@quazzutheme.test</p>
        </div>
      </div>
    </section>


    <!-- Footer -->
    <footer class="page-footer deep-purple lighten-1">
      <div class="container">
        <div class="row">
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
      <div class="footer-copyright deep-purple darken-1">
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

@endsection
