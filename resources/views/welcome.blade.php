@extends('layouts.main')
@section('content')
    <!-- ##### Hero Area Start ##### -->
    <section class="hero-area bg-img bg-overlay-2by5" style="background-image: url({{asset('img/bg-img/bg1.jpg')}});">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <!-- Hero Content -->
                    <div class="hero-content text-center">
                        <h2>Let's Study Together</h2>
                        <a href="#" class="btn clever-btn">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Hero Area End ##### -->

    <!-- ##### Cool Facts Area Start ##### -->
    <section class="cool-facts-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <!-- Single Cool Facts Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-cool-facts-area text-center mb-100 wow fadeInUp" data-wow-delay="250ms">
                        <div class="icon">
                            <img src="img/core-img/docs.png" alt="">
                        </div>
                        <h2><span class="counter">1912</span></h2>
                        <h5>Success Stories</h5>
                    </div>
                </div>

                <!-- Single Cool Facts Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-cool-facts-area text-center mb-100 wow fadeInUp" data-wow-delay="500ms">
                        <div class="icon">
                            <img src="img/core-img/star.png" alt="">
                        </div>
                        <h2><span class="counter">123</span></h2>
                        <h5>Dedicated Tutors</h5>
                    </div>
                </div>

                <!-- Single Cool Facts Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-cool-facts-area text-center mb-100 wow fadeInUp" data-wow-delay="750ms">
                        <div class="icon">
                            <img src="img/core-img/events.png" alt="">
                        </div>
                        <h2><span class="counter">89</span></h2>
                        <h5>Scheduled Events</h5>
                    </div>
                </div>

                <!-- Single Cool Facts Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="single-cool-facts-area text-center mb-100 wow fadeInUp" data-wow-delay="1000ms">
                        <div class="icon">
                            <img src="img/core-img/earth.png" alt="">
                        </div>
                        <h2><span class="counter">56</span></h2>
                        <h5>Available Courses</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Cool Facts Area End ##### -->

    <!-- ##### Popular Courses Start ##### -->
    <section class="popular-courses-area section-padding-100-0" style="background-image: url({{asset('img/core-img/texture.png')}});">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h3>Popular Online Courses</h3>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Popular Course -->
                @foreach($courses as $course)
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-popular-course mb-100 wow fadeInUp" data-wow-delay="250ms">
                        <img src="{{URL::to('/')}}/images/{{$course->image}}" alt="">
                        <!-- Course Content -->
                        <div class="course-content">
                            <h4>{{$course->name}}</h4>
                            <div class="meta d-flex align-items-center">
                                <a href="#">{{$course->instructors[0]->user->full_name}}</a>
                                <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                                <a href="#">{{$course->category->name}}</a>
                            </div>
                            <p>{{$course->describe}}</p>
                        </div>
                        <!-- Seat Rating Fee -->
                        <div class="seat-rating-fee d-flex justify-content-between">
                            <div class="seat-rating h-100 d-flex align-items-center">
                                <div class="seat">
                                    <i class="fa fa-user" aria-hidden="true"></i> 10
                                </div>
                                <div class="rating">
                                    <i class="fa fa-star" aria-hidden="true"></i> 4.5
                                </div>
                            </div>
                            <div class="course-fee h-100">
                                <a href="#" class="free">Free</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
                                <div class="col-12">
                    <div class="load-more text-center wow fadeInUp" data-wow-delay="1000ms">
                        <a href="#" class="btn clever-btn btn-2">All Courses</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Popular Courses End ##### -->

    <!-- shhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh -->
    <div class="service_area gray_bg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h3>Popular Scholarship</h3>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center ">
                <div class="col-lg-4 col-md-6">
                    <div class="single_service d-flex align-items-center ">
                        <div class="icon">
                            <i class="flaticon-school"></i>
                        </div>
                        <div class="service_info">
                            <h4>Scholarship</h4>
                            <p>Available</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_service d-flex align-items-center ">
                        <div class="icon">
                            <i class="flaticon-error"></i>
                        </div>
                        <div class="service_info">
                            <h4>Scholarship</h4>
                            <p>Available</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single_service d-flex align-items-center ">
                        <div class="icon">
                            <i class="flaticon-book"></i>
                        </div>
                        <div class="service_info">
                            <h4>Scholarship</h4>
                            <p>Available</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh  --> 


<!-- neww kjfsj              -->


<div class="popular_program_area section__padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title text-center">
                        <h3>Popular Program</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <nav class="custom_tabs text-center">
                        <div class="nav" id="nav-tab" role="tablist">
                            @foreach($programtypes as $programtype)
                            <a class="nav-item nav-link" id="nav-{{$programtype->name}}-tab" data-toggle="tab" href="#nav-{{$programtype->name}}" role="tab" aria-controls="nav-{{$programtype->name}}" aria-selected="false">{{ucfirst($programtype->name)}}</a>
                            @endforeach
                        </div>
                    </nav>
                </div>
            </div>

            <div class="tab-content" id="nav-tabContent">
                @foreach($programtypes as $programtype)
                <div class="tab-pane fade" id="nav-{{$programtype->name}}" role="tabpanel" aria-labelledby="nav-{{$programtype->name}}-tab">
                    <div class="row">
                        @foreach($programes as $programe)
                            @if($programe->type->name === $programtype->name)
                            <div class="col-lg-4 col-md-6">
                                <div class="single__program">
                                    <div class="program_thumb">
                                        <img src="{{URL::to('/')}}/images/{{$programe->image}}" alt="">
                                    </div>
                                    <div class="program__content">
                                        <span>{{$programe->category->name}}</span>
                                        <h4>{{$programe->name}}</h4>
                                        <p>{{$programe->describe}}</p>
                                        <a href="#" class="boxed-btn5">Apply NOw</a>
                                    </div>
                                </div>
                            </div>
                            @endif
                        @endforeach
                    </div>
                </div>
                 @endforeach
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="course_all_btn text-center">
                        <a href="{{route('programs')}}" class="boxed-btn4">View All Programs</a>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!---          lksjgjgg              -->


    <!-- Latest Course   -->
    <div class="latest_coures_area">
        <div class="latest_coures_inner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="coures_info">
                            <div class="section_title white_text">
                                <h3>Latest Courses</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod <br> tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim <br> veniam, quis nostrud exercitation.</p>
                            </div>
                            <div class="coures_wrap d-flex">
                                <div class="single_wrap">
                                    <div class="icon">
                                        <i class="flaticon-lab"></i>
                                    </div>
                                    <h4>Bachelor of <br>
                                        Graphic Design</h4>
                                        <p>Lorem ipsum dolor sit amet, sectetur adipiscing elit, sed do eiusmod tpor incididunt ut piscing vcs.</p>
                                        <a href="#" class="boxed-btn5">Apply NOw</a>
                                </div>
                                <div class="single_wrap">
                                    <div class="icon">
                                        <i class="flaticon-lab"></i>
                                    </div>
                                    <h4>Bachelor of <br>
                                        Graphic Design</h4>
                                        <p>Lorem ipsum dolor sit amet, sectetur adipiscing elit, sed do eiusmod tpor incididunt ut piscing vcs.</p>
                                        <a href="#" class="boxed-btn5">Apply NOw</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- latest course -->

    <!-- ##### Best Tutors Start ##### -->
    <section class="best-tutors-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h3>The Best Tutors in Town</h3>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="tutors-slide owl-carousel wow fadeInUp" data-wow-delay="250ms">
                        @foreach($instructors as $instructor)
                        <!-- Single Tutors Slide -->
                        <div class="single-tutors-slides">
                            <!-- Tutor Thumbnail -->
                            <div class="tutor-thumbnail">
                                <img src="{{URL::to('/')}}/images/{{$instructor->user->image}}" alt="">
                            </div>
                            <!-- Tutor Information -->
                            <div class="tutor-information text-center">
                                <h5>{{$instructor->user->full_name}}</h5>
                                <span>{{$instructor->user->profile->job}}</span>
                                <p>{{$instructor->user->profile->about_me}}</p>
                                <div class="social-info">
                                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Best Tutors End ##### -->

    <!-- ##### Upcoming Events Start ##### -->
    <section class="upcoming-events section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h3>Upcoming events</h3>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Upcoming Events -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-upcoming-events mb-50 wow fadeInUp" data-wow-delay="250ms">
                        <!-- Events Thumb -->
                        <div class="events-thumb">
                            <img src="img/bg-img/e1.jpg" alt="">
                            <h6 class="event-date">August 26</h6>
                            <h4 class="event-title">Networking Day</h4>
                        </div>
                        <!-- Date & Fee -->
                        <div class="date-fee d-flex justify-content-between">
                            <div class="date">
                                <p><i class="fa fa-clock"></i> August 26 @ 9:00 am</p>
                            </div>
                            <div class="events-fee">
                                <a href="#">$45</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Upcoming Events -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-upcoming-events mb-50 wow fadeInUp" data-wow-delay="500ms">
                        <!-- Events Thumb -->
                        <div class="events-thumb">
                            <img src="img/bg-img/e2.jpg" alt="">
                            <h6 class="event-date">August 7</h6>
                            <h4 class="event-title">Open Doors Day</h4>
                        </div>
                        <!-- Date & Fee -->
                        <div class="date-fee d-flex justify-content-between">
                            <div class="date">
                                <p><i class="fa fa-clock"></i> August 7 @ 9:00 am</p>
                            </div>
                            <div class="events-fee">
                                <a href="#" class="free">Free</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Upcoming Events -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-upcoming-events mb-50 wow fadeInUp" data-wow-delay="750ms">
                        <!-- Events Thumb -->
                        <div class="events-thumb">
                            <img src="img/bg-img/e3.jpg" alt="">
                            <h6 class="event-date">August 3</h6>
                            <h4 class="event-title">Creative Leadership</h4>
                        </div>
                        <!-- Date & Fee -->
                        <div class="date-fee d-flex justify-content-between">
                            <div class="date">
                                <p><i class="fa fa-clock"></i> August 3 @ 9:00 am</p>
                            </div>
                            <div class="events-fee">
                                <a href="#">$45</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Upcoming Events -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-upcoming-events mb-50 wow fadeInUp" data-wow-delay="250ms">
                        <!-- Events Thumb -->
                        <div class="events-thumb">
                            <img src="img/bg-img/e1.jpg" alt="">
                            <h6 class="event-date">August 26</h6>
                            <h4 class="event-title">Networking Day</h4>
                        </div>
                        <!-- Date & Fee -->
                        <div class="date-fee d-flex justify-content-between">
                            <div class="date">
                                <p><i class="fa fa-clock"></i> August 26 @ 9:00 am</p>
                            </div>
                            <div class="events-fee">
                                <a href="#">$45</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Upcoming Events -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-upcoming-events mb-50 wow fadeInUp" data-wow-delay="500ms">
                        <!-- Events Thumb -->
                        <div class="events-thumb">
                            <img src="img/bg-img/e2.jpg" alt="">
                            <h6 class="event-date">August 7</h6>
                            <h4 class="event-title">Open Doors Day</h4>
                        </div>
                        <!-- Date & Fee -->
                        <div class="date-fee d-flex justify-content-between">
                            <div class="date">
                                <p><i class="fa fa-clock"></i> August 7 @ 9:00 am</p>
                            </div>
                            <div class="events-fee">
                                <a href="#" class="free">Free</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Single Upcoming Events -->
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-upcoming-events mb-50 wow fadeInUp" data-wow-delay="750ms">
                        <!-- Events Thumb -->
                        <div class="events-thumb">
                            <img src="img/bg-img/e3.jpg" alt="">
                            <h6 class="event-date">August 3</h6>
                            <h4 class="event-title">Creative Leadership</h4>
                        </div>
                        <!-- Date & Fee -->
                        <div class="date-fee d-flex justify-content-between">
                            <div class="date">
                                <p><i class="fa fa-clock"></i> August 3 @ 9:00 am</p>
                            </div>
                            <div class="events-fee">
                                <a href="#">$45</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- end second row -->
        </div>
    </section>
    <!-- ##### Upcoming Events End ##### -->


    <!-- recent event -->
    <div class="recent_event_area section__padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10">
                    <div class="section_title text-center mb-70">
                        <h3 class="mb-45">Recent Event</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="single_event d-flex align-items-center">
                        <div class="date text-center">
                            <span>02</span>
                            <p>Dec, 2020</p>
                        </div>
                        <div class="event_info">
                            <a href="event_details.html">
                                <h4>How to speake like a nativespeaker?</h4>
                             </a>
                            <p><span> <i class="flaticon-clock"></i> 10:30 pm</span> <span> <i class="flaticon-calendar"></i> 21Nov 2020 </span> <span> <i class="flaticon-placeholder"></i> AH Oditoriam</span> </p>
                        </div>
                    </div>
                    <div class="single_event d-flex align-items-center">
                        <div class="date text-center">
                            <span>03</span>
                            <p>Dec, 2020</p>
                        </div>
                        <div class="event_info">
                            <a href="event_details.html">
                                <h4>How to speake like a nativespeaker?</h4>
                             </a>
                            <p><span> <i class="flaticon-clock"></i> 10:30 pm</span> <span> <i class="flaticon-calendar"></i> 21Nov 2020 </span> <span> <i class="flaticon-placeholder"></i> AH Oditoriam</span> </p>
                        </div>
                    </div>
                    <div class="single_event d-flex align-items-center">
                        <div class="date text-center">
                            <span>10</span>
                            <p>Dec, 2020</p>
                        </div>
                        <div class="event_info">
                            <a href="event_details.html">
                                <h4>How to speake like a nativespeaker?</h4>
                             </a>
                            <p><span> <i class="flaticon-clock"></i> 10:30 pm</span> <span> <i class="flaticon-calendar"></i> 21Nov 2020 </span> <span> <i class="flaticon-placeholder"></i> AH Oditoriam</span> </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!--  recent event -->
    <!-- ##### Blog Area Start ##### -->
    <section class="blog-area section-padding-100-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading">
                        <h3>From Our Blog</h3>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Blog Area -->
                <div class="col-12 col-md-6">
                    <div class="single-blog-area mb-100 wow fadeInUp" data-wow-delay="250ms">
                        <img src="img/blog-img/1.jpg" alt="">
                        <!-- Blog Content -->
                        <div class="blog-content">
                            <a href="#" class="blog-headline">
                                <h4>English Grammer</h4>
                            </a>
                            <div class="meta d-flex align-items-center">
                                <a href="#">Sarah Parker</a>
                                <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                                <a href="#">Art &amp; Design</a>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim nulla, mollis eu metus in, sagittis</p>
                        </div>
                    </div>
                </div>

                <!-- Single Blog Area -->
                <div class="col-12 col-md-6">
                    <div class="single-blog-area mb-100 wow fadeInUp" data-wow-delay="500ms">
                        <img src="img/blog-img/2.jpg" alt="">
                        <!-- Blog Content -->
                        <div class="blog-content">
                            <a href="#" class="blog-headline">
                                <h4>English Grammer</h4>
                            </a>
                            <div class="meta d-flex align-items-center">
                                <a href="#">Sarah Parker</a>
                                <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                                <a href="#">Art &amp; Design</a>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce enim nulla, mollis eu metus in, sagittis</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- recent news --> 
    <div class="recent_news_area section__padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10">
                    <div class="section_title text-center mb-70">
                        <h3 class="mb-45">Recent News</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="single__news">
                        <div class="thumb">
                            <a href="single-blog.html">
                                <img src="{{ asset('img/news/1.png')}}" alt="">
                            </a>
                            <span class="badge">Group Study</span>
                        </div>
                        <div class="news_info">
                            <a href="single-blog.html">
                                <h4>Those Other College Expenses You
                                    Aren’t Thinking About</h4>
                            </a>
                            <p class="d-flex align-items-center"> <span><i class="flaticon-calendar-1"></i> May 10, 2020</span> 
                            
                            <span> <i class="flaticon-comment"></i> 01 comments</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="single__news">
                        <div class="thumb">
                            <a href="single-blog.html">
                                <img src="{{ asset('img/news/2.png')}}" alt="">
                            </a>
                            <span class="badge bandge_2">Hall Life</span>
                        </div>
                        <div class="news_info">
                            <a href="single-blog.html">
                                <h4>Those Other College Expenses You
                                    Aren’t Thinking About</h4>
                            </a>
                            <p class="d-flex align-items-center"> <span><i class="flaticon-calendar-1"></i> May 10, 2020</span> 
                            
                            <span> <i class="flaticon-comment"></i> 01 comments</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!-- recent news -->
   @endsection('content')