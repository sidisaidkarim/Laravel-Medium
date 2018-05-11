@extends('layouts.app')
@section('content')

    <h1>Your Stories</h1>
    <hr />
    @if(count($posts)>1)
      @foreach($posts as $post)
        <div  class="well py-3">
          <h2>{{$post->title}}</h2>

          <h6> créé: {{$post->created_at}}</h6>
          <a href="posts/{{$post->id}}"> link</a>
        </div>
      @endforeach

    @else
      <p>
        no posts found
      </p>
    @endif
@endsection
