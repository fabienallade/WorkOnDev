<!DOCTYPE html>

<html lang="en">

<head>
        <meta charset="utf-8">

        <!-- TITLE OF SITE-->
        <title> Allade Fabien </title>

        <!-- META TAG -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- Scripts -->
        <script src="{{ asset('materialize/js/materialize.js') }}" defer></script>
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Styles -->
        <link href="{{ asset('materialize/css/materialize.css') }}" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">


    </head>
    <body>
        <!-- Start Container-->
        <div class="container">
              <!-- row -->
              <div class="row">
              <!-- =========================================
                             SIDEBAR
              ==========================================-->
                  <!-- Start Sidebar -->
                  <aside class="col l4 m12 s12 sidebar z-depth-1" id="sidebar">
                      <!--  Sidebar row -->
                      <div class="row">
                          <!--  top section   -->
                          <div class="heading">
                              <!-- ====================
                                        IMAGE
                              ==========================-->
                              <div class="feature-img">
                                  <a href="index-2.html"><img src="assets/images/profile-img.jpg" class="responsive-img" alt=""></a>
                              </div>
                              <!-- =========================================
                                         NAVIGATION
                              ==========================================-->
                              <div class=" nav-icon">
                                  <nav>
                                      <div class="nav-wrapper">
                                        <ul id="nav-mobile" class="side-nav">
                                          <li><a href="index-2.html">Resume</a></li>
                                          <li><a href="project.html">Projects</a></li>
                                          <li><a href="cover-latter.html">Cover Latter</a></li>
                                          <li><a href="blog.html">Blog</a></li>
                                          <li><a href="contact.html">Contact</a></li>
                                        </ul>
                                        <a href="#" data-activates="nav-mobile" class="button-collapse  "><i class="mdi-navigation-menu"></i></a>
                                      </div>
                                  </nav>
                              </div>
                              <!-- ========================================
                                         NAME AND TAGLINE
                              ==========================================-->
                              <div class="title col s12 m12 l9 right  wow fadeIn" data-wow-delay="0.1s">
                                  <h2>Al Rayhan</h2> <!-- title name -->
                                  <span>UI & UX Expert</span>  <!-- tagline -->
                              </div>
                          </div>
                           <!-- sidebar info -->
                          <div class="col l12 m12 s12 sort-info sidebar-item">
                              <div class="row">
                                  <div class="col m12 s12 l3 icon"> <!-- icon -->
                                     <i class="fa fa-user"></i>
                                  </div>
                                  <div class="col m12 s12 l9 info wow fadeIn a1" data-wow-delay="0.1s" > <!-- text -->
                                      <div class="section-item-details">
                                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                          dolore magna aliqua . Ld do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <!-- MOBILE NUMBER -->
                          <div class="col l12 m12 s12  mobile sidebar-item">
                              <div class="row">
                                  <div class="col m12 s12 l3 icon">
                                      <i class="fa fa-phone"></i> <!-- icon -->
                                  </div>
                                  <div class="col m12 s12 l9 info wow fadeIn a2" data-wow-delay="0.2s" >
                                      <div class="section-item-details">
                                          <div class="personal">
                                              <h4><a href="tel:555-555-5555">(111)-333-4444</a></h4> <!-- Number -->
                                              <span>mobile</span>
                                          </div>
                                          <div class="work">
                                              <h4><a href="tel:555-555-5555">(121)-323-3494</a></h4> <!-- Number -->
                                              <span>work</span>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <!--  EMAIL -->
                          <div class="col l12 m12 s12  email sidebar-item ">
                              <div class="row">
                                  <div class="col m12 s12 l3 icon">
                                      <i class="fa fa-envelope"></i> <!-- icon -->
                                  </div>
                                  <div class="col m12 s12 l9 info wow fadeIn a3" data-wow-delay="0.3s">
                                      <div class="section-item-details">
                                          <div class="personal">
                                              <h4><a href="mailto:someone@example.com">mail@alrayhan.com</a></h4> <!-- Email -->
                                              <span>personal</span>
                                          </div>
                                          <div class="work">
                                              <h4><a href="mailto:someone@example.com">ar@deviserweb.com</a></h4> <!-- Email -->
                                              <span>work</span> <br>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <!-- ADDRESS  -->
                          <div class="col l12 m12 s12  address sidebar-item ">
                              <div class="row">
                                  <div class="col l3 m12  s12 icon">
                                      <i class="fa fa-home"></i> <!-- icon -->
                                  </div>
                                  <div class="col m12 s12 l9 info wow fadeIn a4" data-wow-delay="0.4s">
                                      <div class="section-item-details">
                                          <div class="address-details"> <!-- address  -->
                                              <h4>24 Golden Tower <span>(2nd floor)</span><br>
                                              Amborkhana, Sylhet.<br>
                                              <span>SYL-3RF87W</span></h4>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <!-- SKILLS -->
                          <div class="col l12 m12 s12  skills sidebar-item" >
                              <div class="row">
                                  <div class="col m12 l3 s12 icon">
                                      <i class="fa fa-calendar-o"></i> <!-- icon -->
                                  </div>
                                   <!-- Skills -->
                                  <div class="col m12 l9 s12 skill-line a5 wow fadeIn" data-wow-delay="0.5s">
                                      <h3>Professional Skills </h3>

                                      <span>Adobe Photoshop</span>
                                      <div class="progress">
                                          <div class="determinate"> 70% </div>
                                      </div>

                                      <span>HTML</span>
                                      <div class="progress">
                                          <div class="determinate"> 95%</div>
                                      </div>

                                      <span>CSS</span>
                                      <div class="progress">
                                          <div class="determinate">90%</div>
                                      </div>

                                      <span>Javascript</span>
                                      <div class="progress">
                                          <div class="determinate">85%</div>
                                      </div>

                                      <span>PHP</span>
                                      <div class="progress">
                                          <div class="determinate">70%</div>
                                      </div>

                                      <span>JAVA</span>
                                      <div class="progress">
                                          <div class="determinate">55%</div>
                                      </div>

                                      <span>SQL</span>
                                      <div class="progress">
                                          <div class="determinate">40%</div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>   <!-- end row -->
                  </aside><!-- end sidebar -->

                  <!-- =========================================
                     Work experiences
                  ==========================================-->

                  <section class="col s12 m12 l8 section">
                      <div class="row">
                          <div class="section-wrapper z-depth-1">
                              <div class="section-icon col s12 m12 l2">
                                  <i class="fa fa-suitcase"></i>
                              </div>
                              <div class="custom-content col s12 m12 l10 wow fadeIn a1" data-wow-delay="0.1s">
                                  <h2>Work Experience</h2>

                                  <div class="custom-content-wrapper wow fadeIn a2" data-wow-delay="0.2s">
                                      <h3>UI/UX Designer <span>@Academy</span></h3>
                                      <span>JAN 2013 - DEC 2013 </span>
                                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                          labore et dolore magna aliqua. </p>
                                  </div>
                                  <div class="custom-content-wrapper wow fadeIn a3" data-wow-delay="0.3s">
                                      <h3>Creative Director <span>@DeviserWeb</span></h3>
                                      <span>JAN 2013 - DEC 2013 </span>
                                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                          dolore magna aliqua. </p>
                                  </div>
                                  <div class="custom-content-wrapper wow fadeIn a4" data-wow-delay="0.4s">
                                      <h3>Graphics Designer <span>@Creative Wrold</span></h3>
                                      <span>JAN 2013 - DEC 2013 </span>
                                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                                          labore et dolore magna aliqua. </p>
                                  </div>
                              </div>
                          </div>

                          <!-- ========================================
                           Education
                          ==========================================-->

                          <div class="section-wrapper z-depth-1">
                              <div class="section-icon col s12 m12 l2">
                                  <i class="fa fa-graduation-cap"></i>
                              </div>
                              <div class="custom-content col s12 m12 l10 wow fadeIn a1" data-wow-delay="0.1s" >
                                  <h2>Education </h2>

                                  <div class="custom-content-wrapper wow fadeIn a2" data-wow-delay="0.2s" >
                                      <h3>Art & Multimedia <span>@Oxford University</span></h3>
                                      <span>JAN 2013 - DEC 2013 </span>
                                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                  </div>
                                  <div class="custom-content-wrapper wow fadeIn a3" data-wow-delay="0.3s" >
                                      <h3>Post Graduation <span>@Lorem</span></h3>
                                      <span>JAN 2013 - DEC 2013 </span>
                                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                  </div>
                                  <div class="custom-content-wrapper wow fadeIn a4" data-wow-delay="0.4s" >
                                      <h3>TTMP Degree <span>@Creative School</span></h3>
                                      <span>JAN 2013 - DEC 2013 </span>
                                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                                  </div>
                              </div>
                          </div>

                          <!-- ========================================
                                Intertests
                          ==========================================-->

                          <div class="section-wrapper z-depth-1">
                              <div class="section-icon col s12 m12 l2">
                                  <i class="fa fa-plane"></i>
                              </div>
                              <div class="interests col s12 m12 l10 wow fadeIn" data-wow-delay="0.1s">
                                  <h2>Interestes </h2>
                                  <ul> <!-- interetsr icon start -->
                                      <li><i class="fa fa-camera-retro tooltipped" data-position="top" data-delay="50" data-tooltip="Photography"></i></li>
                                      <li><i class="fa fa-glass tooltipped" data-position="top" data-delay="50" data-tooltip="Drinking"></i></li>
                                      <li><i class="fa fa-headphones tooltipped" data-position="top" data-delay="50" data-tooltip="Music"></i></li>
                                      <li><i class="fa fa-comments tooltipped" data-position="top" data-delay="50" data-tooltip="Chatting"></i></li>
                                      <li><i class="fa fa-coffee tooltipped" data-position="top" data-delay="50" data-tooltip="Coffee"></i></li>
                                  </ul> <!-- interetsr icon end -->
                              </div>
                          </div>
                          <!-- =======================================
                            portfolio Website
                          ==========================================-->

                          <div class="section-wrapper z-depth-1 wow fadeIn" data-wow-delay="0.1s">
                              <div class="col s12 m12 l10 website right" >
                                  <div class="row">
                                      <div class="col s12 m12 l6">
                                         <span><a href="#">www.alrayhan.com</a></span>
                                      </div>
                                      <div class="col col s12 m12 l6">
                                          <span><a href="#">www.dribble.com/rtralrayhan</a></span>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div><!-- end row -->
                  </section><!-- end section -->
              </div> <!-- end row -->
          </div>  <!-- end container -->

   <!--=====================
                  JavaScript
          ===================== -->
          <!-- Jquery core js-->
          <script src="assets/js/jquery.min.js"></script>

          <!-- materialize js-->
          <script src="assets/js/materialize.min.js"></script>

          <!-- wow js-->
          <script src="assets/js/wow.min.js"></script>

          <!-- Map api -->
          <script src="http://maps.googleapis.com/maps/api/js?v=3.exp"></script>

          <!-- Masonry js-->
          <script src="assets/js/masonry.pkgd.js"></script>

          <script src="assets/js/validator.min.js"></script>

          <!-- Customized js -->
          <script src="assets/js/init.js"></script>

          <!-- =========================================================
              STYLE SWITCHER | ONLY FOR DEMO NOT INCLUDED IN MAIN FILES
          ===========================================================-->

          <!-- Style switter js -->
          <script src="assets/js/styleswitcher.js"></script>

          <div class="cv-style-switch" id="switch-style">
              <a id="toggle-switcher" class="switch-button icon_tools"> <i class="fa fa-cogs"></i></a>
              <div class="switched-options">
                  <div class="config-title">
                      Colors :
                  </div>
                  <ul class="styles">
                      <li><a href="index-2.html#" onclick="setActiveStyleSheet('red'); return false;" title="Red">
                      <div class="red"></div>
                      </a></li>

                      <li><a href="index-2.html#" onclick="setActiveStyleSheet('purple'); return false;" title="purple">
                      <div class="purple"></div>
                      </a></li>

                      <li><a href="index-2.html#" onclick="setActiveStyleSheet('orange'); return false;" title="orange">
                      <div class="orange"></div>
                      </a></li>

                      <li><a href="index-2.html#" onclick="setActiveStyleSheet('green'); return false;" title="green">
                      <div class="green"></div>
                      </a></li>

                      <li><a href="index-2.html#" onclick="setActiveStyleSheet('lime'); return false;" title="lime">
                      <div class="lime"></div>
                      </a></li>

                      <li class="p">
                          ( NOTE: Pre Defined Colors. You can change colors very easily )
                      </li>
                  </ul>
              </div>
          </div>

    </body>

</html>