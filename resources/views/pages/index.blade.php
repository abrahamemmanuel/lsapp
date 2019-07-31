@extends('layouts.app')

@section('content')
  <div class="jumbotron text-center mt-3">
    <h1>{{$title}}</h1>
    <p>This is the laravel application from the laravel from srcatch Youtube series</p>
    <p>
      <a class="btn btn-primary btn-lg" href="/login" role="button">Login</a>  <a class="btn btn-success btn-lg" href="/register" role="button">Register</a>
    </p>
  </div>
@endsection
