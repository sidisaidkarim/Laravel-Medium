@extends('layout.app')
@section('content')
    <a href="../posts" class="btn btn-danger" > Go backfff</a>
   <h4>{{$post->title}}</h4>
   <p>
     {{$post->body}}
   </p>
 {{$success}}
@endsection
