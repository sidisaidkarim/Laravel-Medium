@extends('layouts.app')
@section('content')
  <h1>Create a Post</h1>
  {!! Form::open(['action'=>'PostsController@store','method'=>'POST','enctype'=>'multipart/form-data']) !!}
    <div class="form-group">
      {{Form::Label('title','Title')}}
      {{Form::text('title','',['class'=>'form-control','placeholder'=>'Title'])}}
    </div>
    <div class="form-group">
      {{Form::Label('body','Body')}}
      {{Form::textarea('body','',['class'=>'form-control','placeholder'=>'body'])}}
    </div>
    <div class="form-group">
      {{Form::Label('categoy','Category')}}
      {{Form::select('category',['TECHNOLOGY'=>'TECHNOLOGY','CULTURE'=>'CULTURE','ENTREPRENEURSHIP'=>'ENTREPRENEURSHIP',
        'CREATIVITY'=>'CREATIVITY','PRODUCTIVITY'=>'PRODUCTIVITY','DEVELOPEMENT'=>'DEVELOPEMENT'],
        ['class'=>'custom-select','placeholder'=>'body'])}}
    </div>
    <div class="form-group">
      {{Form::file('cover_image')}}
    </div>
    {{Form::submit('submit',['class'=>'btn btn-primary'])}}
  {!! Form::close() !!}

@endsection
