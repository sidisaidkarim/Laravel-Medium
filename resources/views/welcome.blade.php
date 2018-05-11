@extends('layouts.app')

@section('content')
  <hr />
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        @foreach ($posts as $post)
          <div class="row mb-5">
            <div class="col-md-8 ">
              <h3><strong><a href="{{route('posts.show',$post->id)}}">{{$post->title}}</a></strong></h3>
              <p>
                {{$post->body}}
              </p>
              <small>{{ date('Y-m-d',  strtotime($post->created_at)  ) }}</small>
            </div>
            <div class="col-md-4">
              <img src="storage/cover_image/{{$post->image}}" class="img-fluid "/>
              <!--<img src="{{$post->image}}" class="img-fluid "/>-->
            </div>
          </div>

        @endforeach
      </div>
      <div class="col-md-4">
        <h2>Your Stories</h2>
        @if(auth()->check())
          @foreach ($user_posts as $user_post)

            <div class="py-3">
              <h4>{{$user_post->title}}</h4>
              <small>{{ date('Y-m-d',  strtotime($post->created_at)  ) }}</small>
            </div>
          @endforeach
        @endif
      </div>
    </div>
  </div>
@endsection
