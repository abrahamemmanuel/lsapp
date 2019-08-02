@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-light">Go Back</a>
    <h1 class="pt-5">{{$post->title}}</h1>
    <div>{!!$post->body!!}</div>
    <hr><small>Written on {{$post->created_at}}</small>
    <hr>
    <a href="/posts/{{$post->id}}/edit" class="btn btn-secondary btn-lg">Edit</a>
    {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right'])!!}
      {{Form::hidden('_method', 'DELETE')}}
      {{Form::submit('Delete', ['class' => 'btn btn-danger btn-lg'])}}
    {!!Form::close()!!}
@endsection