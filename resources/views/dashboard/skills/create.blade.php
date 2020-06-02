@extends('dashboard.layout.app')
@php 
    
@endphp
@section('titel',$pageTitle)
@section('content')
<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header card-header-primary">
                <h4 class="card-title">{{$pageTitle}}</h4>
                    <p class="card-category">{{$pageDesc}}</p>
            </div>
            <div class="card-body">
            <form action="{{route('dashboard.'.$models.'.store')}}" method="post">
            {{csrf_field()}}
                @include('dashboard.'.$models.'.form')
                <button type="submit" class="btn btn-primary pull-right">{{$pageTitle}}</button>
                <div class="clearfix"></div>
            </form>
            </div>
        </div>
    </div>
</div>
@endsection