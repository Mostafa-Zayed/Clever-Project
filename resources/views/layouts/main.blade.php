<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *Must* come first in the head; any other head content must come *after* these tags -->

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Title -->
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('img/core-img/favicon.ico')}}">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{ asset('style.css')}}">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- CSS here 
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css')}}">-->
    <link rel="stylesheet" href="{{ asset('css/themify-icons.css')}}">
<!--    <link rel="stylesheet" href="{{ asset('css/nice-select.css')}}">-->
    <link rel="stylesheet" href="{{ asset('css/flaticon.css')}}"><!--
    <link rel="stylesheet" href="{{ asset('css/gijgo.css')}}">
    <link rel="stylesheet" href="{{ asset('css/animatee.css')}}">
    <link rel="stylesheet" href="{{ asset('css/slicknav.css')}}">-->
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    
</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="spinner"></div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Top Header Area -->
        <div class="top-header-area d-flex justify-content-between align-items-center">
            <!-- Contact Info -->
            <div class="contact-info">
                <a href="#"><span>Phone:</span> +44 300 303 0266</a>
                <a href="#"><span>Email:</span> info@clever.com</a>
            </div>
            <!-- Follow Us -->
            <div class="follow-us">
                <span>Follow us</span>
                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            </div>
        </div>

        <!-- Navbar Area -->
        <div class="clever-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <!-- Menu -->
                <nav class="classy-navbar justify-content-between" id="cleverNav">

                    <!-- Logo -->
                    <a class="nav-brand" href="index.html"><img src="{{asset('img/core-img/logo.png')}}" alt=""></a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">

                        <!-- Close Button -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                        <div class="classynav">
                            <ul>
                                <li><a href="{{route('home')}}">Home</a></li>
                               <!-- 
                              -->
                                <li><a href="{{route('programs')}}">Programs</a>
                                  <ul class="dropdown">
                                    <li><a href="#">Graduate</a></li>
                                    <li><a href="#">Postgraduate</a></li>
                                    <li><a href="#">PHD Scholarships</a></li>
                                    <li><a href="#">Training</a></li>
                                  </ul>
                                </li>
                                <li><a href="{{route('courses')}}">Courses</a></li>

                                <li><a href="{{route('scholarships')}}">Scholarships</a></li>
                                <li><a href="#">Pages</a>
                                    <ul class="dropdown">
                                        <li><a href="#">Categories</a></li>
                                        <li><a href="{{route('instructors')}}">Instructors</a></li>
                                        <li><a href="{{url('news')}}">News</a></li>
                                        <li><a href="{{url('blog')}}">Blog</a></li>
                                        <li><a href="#">Event</a>
                                          <ul class="dropdown">
                                            <li>
                                              <a href="{{route('upcoming_events')}}">Upcoming Events
                                              </a>
                                            </li>
                                            <li>
                                              <a href="{{route('recent_events')}}">Recent Events</a>
                                            </li>
                                          </ul>
                                        </li>
                                        
                                    </ul>
                                </li>
                                
                                <li><a href="contact.html">Contact</a></li>
                              
                            </ul>

                            <!-- Search Button -->
                            <div class="search-area">
                                <form action="#" method="post">
                                    <input type="search" name="search" id="search" placeholder="Search">
                                    <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                                </form>
                            </div>
                            @guest
                            <!-- Register / Login -->
                            <div class="register-login-area">
                                <a href="{{route('register')}}" class="btn {{reg_active('register')}}">Register</a>
                                <a href="{{route('login')}}" class="btn {{reg_active('login')}}">Login</a>
                            </div>
                            @else
                            <!-- Register / Login -->
                            <div class="login-state d-flex align-items-center">
                                <div class="user-name mr-30">
                                    <div class="dropdown">
                                        <a class="dropdown-toggle" href="#" role="button" id="userName" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ucfirst(auth()->user()->name)}}</a>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userName">
                                            <a class="dropdown-item" href="#">Profile</a>
                                            <a class="dropdown-item" href="#">Account Info</a>
                                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Logout</a>
                                            <a class="dropdown-item" href='#'>My Courses</a>
                                        </div>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                    </div>
                                </div>
                                <div class="userthumb">
                                  @if(isset(auth()->user()->image) && !empty(auth()->user()->image))
                                    <img src="{{URL::to('/')}}/images/{{auth()->user()->image}}" alt=""/>
                                    @endif
                                </div>
                            </div>
                            @endguest
                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->
    <!-- ##### Breadcumb Area Start ##### -->
    <!--<div class="breadcumb-area">-->
        <!-- Breadcumb 
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Courses</a></li>
                <li class="breadcrumb-item active" aria-current="page">Art &amp; Design</li>
            </ol>
        </nav>
    </div>-->
    <!-- ##### Breadcumb Area End ##### -->
    @yield('content')

     <!-- Footer -->
     <footer class="footer">
      <div class="footer_top">
          <div class="container">
              <div class="newsLetter_wrap">
                  <div class="row justify-content-between">
                      <div class="col-md-7">
                          <div class="footer_widget">
                              <h3 class="footer_title">
                                  Stay Updated
                              </h3>
                              <form action="#" class="newsletter_form">
                                  <input type="text" placeholder="Email Address">
                                  <button type="submit">Subscribe Now</button>
                              </form>
                          </div>
                      </div>
                      <div class="col-md-12 col-lg-5">
                          <div class="footer_widget">
                              <h3 class="footer_title">
                                  Stay Updated
                              </h3>
                              <div class="socail_links">
                                  <ul>
                                      <li>
                                          <a href="#">
                                              <i class="ti-facebook"></i>
                                          </a>
                                      </li>
                                      <li>
                                          <a href="#">
                                              <i class="fa fa-twitter"></i>
                                          </a>
                                      </li>
                                      <li>
                                          <a href="#">
                                              <i class="fa fa-google-plus"></i>
                                          </a>
                                      </li>
                                      <li>
                                          <a href="#">
                                              <i class="fa fa-linkedin"></i>
                                          </a>
                                      </li>
                                  </ul>
                              </div>
  
                          </div>
                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-xl-3 col-md-6 col-lg-3">
                      <div class="footer_widget">
                          <h3 class="footer_title">
                              About Us
                          </h3>
                          <ul>
                              <li><a href="#">Online Learning</a></li>
                              <li><a href="#">About Us</a></li>
                              <li><a href="#">Careers</a></li>
                              <li><a href="#">Press Center</a></li>
                              <li><a href="#">Become an Instructor</a></li>
                          </ul>
                      </div>
                  </div>
                  <div class="col-xl-3 col-md-6 col-lg-3">
                      <div class="footer_widget">
                          <h3 class="footer_title">
                              Campus
                          </h3>
                          <ul>
                              <li><a href="#">Our Plans</a></li>
                              <li><a href="#">Free Trial</a></li>
                              <li><a href="#">Academic Solutions</a></li>
                              <li><a href="#">Business Solutions</a></li>
                              <li><a href="#">Government Solutions</a></li>
                          </ul>
                      </div>
                  </div>
                  <div class="col-xl-3 col-md-6 col-lg-3">
                      <div class="footer_widget">
                          <h3 class="footer_title">
                              Study
                          </h3>
                          <ul>
                              <li><a href="#">Admissions Policy</a></li>
                              <li><a href="#">Getting Started</a></li>
                              <li><a href="#">Visa Information</a></li>
                              <li><a href="#">Tuition Calculator</a></li>
                              <li><a href="#">Request Information</a></li>
                          </ul>
                      </div>
                  </div>
                  <div class="col-xl-3 col-md-6 col-lg-3">
                      <div class="footer_widget">
                          <h3 class="footer_title">
                              Support
                          </h3>
                          <ul>
                              <li><a href="#">Support</a></li>
                              <li><a href="#">Contact Us</a></li>
                              <li><a href="#">System Requirements</a></li>
                              <li><a href="#">Register Activation Key</a></li>
                              <li><a href="#">Site feedback</a></li>
                          </ul>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="copy-right_text">
          <div class="container">
              <div class="footer_border"></div>
              <div class="row">
                  <div class="col-xl-12">
                      <p class="copy_right text-center">
                          </p><p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright ©<script>document.write(new Date().getFullYear());</script>2020 All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                      <p></p>
                  </div>
              </div>
          </div>
      </div>
  </footer>
  <!-- Footer -->
    <!-- ##### Blog Area End ##### -->

    <!-- ##### Footer Area Start ##### 
    <footer class="footer-area">
         Top Footer Area 

        <div class="top-footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                         Footer Logo 
                        <div class="footer-logo">
                            <a href="index.html"><img src="{{ asset('img/core-img/logo2.png')}}" alt=""></a>
                        </div>
                         Copywrite 
                        <p><a href="#"> Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. 
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
 Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. </p>
                    </div>
                </div>
            </div>
        </div>

         Bottom Footer Area 
        <div class="bottom-footer-area d-flex justify-content-between align-items-center">
             Contact Info 
            <div class="contact-info">
                <a href="#"><span>Phone:</span> +44 300 303 0266</a>
                <a href="#"><span>Email:</span> info@clever.com</a>
            </div>
            Follow Us 
            <div class="follow-us">
                <span>Follow us</span>
                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            </div>
        </div>
    </footer>-->
    <!-- ##### Footer Area End ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="{{ asset('js/jquery/jquery-2.2.4.min.js')}}"></script>
    <!-- Popper js -->
    <script src="{{ asset('js/bootstrap/popper.min.js')}}"></script>
    <!-- Bootstrap js -->
    <script src="{{ asset('js/bootstrap/bootstrap.min.js')}}"></script>
    <!-- All Plugins js -->
    <script src="{{ asset('js/plugins/plugins.js')}}"></script>
    <!-- Active js -->
    <script src="{{ asset('js/active.js')}}"></script>

    
    <!-- JS here 
    <script src="{{ asset('js/vendor/modernizr-3.5.0.min.js')}}"></script>
    <script src="{{ asset('js/vendor/jquery-1.12.4.min.js')}}"></script>
    <script src="{{ asset('js/popper.min.js')}}"></script>
    <script src="{{ asset('js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('js/isotope.pkgd.min.js')}}"></script>
    <script src="{{ asset('js/ajax-form.js')}}"></script>
    <script src="{{ asset('js/waypoints.min.js')}}"></script>
    <script src="{{ asset('js/jquery.counterup.min.js')}}"></script>
    <script src="{{ asset('js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{ asset('js/scrollIt.js')}}"></script>
    <script src="{{ asset('js/jquery.scrollUp.min.js')}}"></script>
    <script src="{{ asset('js/wow.min.js')}}"></script>
    <script src="{{ asset('js/nice-select.min.js')}}"></script>
    <script src="{{ asset('js/jquery.slicknav.min.js')}}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{ asset('js/plugins.js')}}"></script>
    <script src="{{ asset('js/gijgo.min.js')}}"></script>
<script src="{{ asset('js/app.js') }}" defer></script>
    contact js 
    <script src="{{ asset('js/contact.js')}}"></script>
    <script src="{{ asset('js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{ asset('js/jquery.form.js')}}"></script>
    <script src="{{ asset('js/jquery.validate.min.js')}}"></script>
    <script src="{{ asset('js/mail-script.js')}}"></script>

    <script src="{{ asset('js/main.js')}}"></script> -->
</body>

</html>