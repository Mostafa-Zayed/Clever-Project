@extends('dashboard.layout.app')
@php 
    $pageDesc  = 'Here You Can Create / Edit / Delete '.ucfirst($models);
    $fields = ['ID','Course Name','Syllabus Link','Control'];
@endphp
@section('title',$pageTitle)
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">{{$pageTitle}}</h4>
                  <a href="{{route('dashboard.'.$models.'.create')}}" class="btn btn-info pull-right">Add {{$model}}</a>
                  <p class="card-category">{{$pageDesc}}</p>
                </div>

                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead class=" text-primary">
                        <tr>
                            @foreach($fields as $field)
                            	<th>{{$field}}</th>
                            @endforeach
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($rows as $row)
                        <tr>
                        	<td>{{$row->id}}</td>
                        	<td>{{$row->course->name}}</td>
                        	<td>{{$row->syllabus_link}}</td>
                        </tr>
                        @endforeach
                      </tbody>
                    </table>
                    
                  </div>
                </div>
        </div>
    </div>
</div>
@endsection