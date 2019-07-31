@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-secondary">Go Back</a>
    <h1 class="pt-5">{{$post->title}}</h1>
    <div>{{$post->body}}</div>
    <hr><small>Written on {{$post->created_at}}</small>
@endsection