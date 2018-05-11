@extends('layouts.app')
@section('content')
  <div class="py-3">
    <h3>{{$post->title}}</h3>
    <p>
      {{$post->body}}
    </p>
  </div>

  <hr />
  <h5> Comments </h5>

  <form class="my-5" method="post" action="{{route('comments.store')}}">
     @csrf
    <div class="form-group ">
      <textarea name="comment" placeholder="Write A Comment"  class="form-control"></textarea>
    </div>
    <input name="post_id" type="hidden" value="{{$post->id}}" />

    @guest
      <h5>Please Login to post a comment</h5>
    @else
    <input type="submit" value="Publish" class="btn btn-primary"/>
    @endguest
  </form>
  @foreach ($comments as $comment)

  <div class="px-5 py-3 my-2 bg-light">
     <span class="text-success">{{$comment->user->name}}</span>
     <small>{{ date('Y-m-d',  strtotime($comment->created_at)  ) }}</small>
    <p>
      {{$comment->body}}
    </p>

  </div>
  @endforeach
@endsection
