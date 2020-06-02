@extends('layouts.main')
@php 
    $routes = createBreadCrumb();
    $num    = count($routes);
    $index  = $num - 1;
 @endphp
@section('content')
<div class="breadcumb-area">
    <!-- Breadcumb -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            @foreach($routes as $key=>$route)
                @if($key === $index)
                    <li class="breadcrumb-item active" aria-current="page">{{ucfirst($route)}}</li>   
                        @break
                    @else
                    <li class="breadcrumb-item"><a href="">{{ucfirst($route)}}</a></li>
                @endif
            @endforeach
        </ol>
    </nav>
</div>
<div class="bradcam_area breadcam_bg">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text">
                        <h3>Our Courses</h3>
                    </div>
                </div>
            </div>
        </div>
</div>

    <!-- ##### Popular Course Area Start ##### -->
    <section class="popular-courses-area section-padding-100">
        <div class="container">
            <div class="row">
                <!-- Single Popular Course -->
                @foreach($courses as $course)
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="single-popular-course mb-100 wow fadeInUp" data-wow-delay="250ms">
                        <img src="{{URL::to('/')}}/images/{{$course->image}}" alt="">
                        <!-- Course Content -->
                        <div class="course-content">
                            <h2><a href="{{url('courses/'.$course->id)}}"> {{ucfirst($course->name)}}</a></h2>
                            <div class="meta d-flex align-items-center">
                                <a href="#">{{ucfirst($course->instructors[0]->user->full_name)}}</a>
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
                                <a href="#" {{($course->type->name === 'free') ? 'class=free' : ''}}>{{$course->type->name}}</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            <!-- Single Popular Course End-->
        </div>

    </section>
    <!-- ##### Popular Course Area End ##### -->

@endsection