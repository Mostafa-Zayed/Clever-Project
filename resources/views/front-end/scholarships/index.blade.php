@extends('layouts.main')
@section('content')
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
    <!-- bradcam_area_start  -->
    <div class="bradcam_area breadcam_bg">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text">
                        <h3>Our Scholarships</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bradcam_area_end  -->

    <!-- popular_program_area_start  -->
    <div class="popular_program_area section__padding program__page">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title text-center">
                        <h3>Our Scholarships</h3>
                    </div>
                </div>
            </div>

            <div class="tab-content" id="nav-tabContent">


            </div>
        </div>
    </div>
    <!-- popular_program_area_end -->
@endsection