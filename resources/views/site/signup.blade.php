@extends('layouts.site')
@section('content')

      <!-- Showcase -->
      <div class="showcase container">
        <div class="row">
          <div class="col s12 m10 center">
            <h5>Welcome To Quazzu</h5>
            <h1>Create An Account</h1>
          </div>
        </div>
      </div>
    </header>

    <!-- Section: Signup -->
    <section class="section section-signup">
      <div class="container">
        <div class="row">
          <div class="col s12 m6">
            <h4>Get a free account</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus veniam id nisi? Saepe sint ipsum distinctio
              molestiae, recusandae autem sequi?</p>
            <h4>Download the free software</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus veniam id nisi? Saepe sint ipsum distinctio
              molestiae, recusandae autem sequi?</p>
            <h4>Push to the platform</h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus veniam id nisi? Saepe sint ipsum distinctio
              molestiae, recusandae autem sequi?</p>
          </div>
          <div class="col s12 m6">
            <div class="card-panel grey lighten-4 grey-text text-darken-4 z-depth-0">
              <form>
                <div class="input-field">
                  <input type="text" id="first_name">
                  <label for="first_name">First Name</label>
                </div>
                <div class="input-field">
                  <input type="text" id="last_name">
                  <label for="last_name">Last Name</label>
                </div>
                <div class="input-field">
                  <input type="email" id="email">
                  <label for="email">Email</label>
                </div>
                <div class="input-field">
                  <input type="password" id="password">
                  <label for="password">Password</label>
                </div>
                <div class="input-field">
                  <input type="text" id="company">
                  <label for="company">Company</label>
                </div>
                <div class="input-field ">
                  <select id="role" >
                    <option value="" disabled selected>Select Role</option>
                    <option value="professional">Professional Developer</option>
                    <option value="hobbyist">Hobbyist</option>
                    <option value="student">Student</option>
                    <option value="manager">Manager</option>
                    <option value="other">Other</option>
                  </select>
                  <label for="role">Role</label>
                </div>
              <div class="input-field">
                  <input type="submit" value="Signup" class="btn btn-large purple btn-extend">
              </div>
              </form>
            </div>
          </div>
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
