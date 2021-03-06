@extends('layouts.app')

@section('content')
 <a href="/posts/{{$post->id}}" class="btn btn-light btn mb-5">Go Back</a>
    <h1>Edit Post</h1>
    {!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    <div class="form-group">
        {{Form::label('title', 'Title')}}
        {{Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
    </div>
    <div class="form-group">
        {{Form::label('body', 'Body')}}
        {{Form::textarea('body', $post->body, ['id'=> 'article-ckeditor', 'class' => 'form-control ckeditor', 'placeholder' => 'Body Text'])}}
    </div>
    <div class="form-group">
    {{Form::file('cover_image')}}
    </div>
    {{Form::hidden('_method','PUT')}}
    {{Form::submit('update', ['class' => 'btn btn-success'])}}
    {!! Form::close() !!}
@endsection