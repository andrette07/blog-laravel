@extends('layouts.app')

@section('content')

<a href="/posts" class="btn btn-light">Go to Posts</a>

<h1>Edit {{ $post->title }}</h1>

<img src="/storage/cover_images/{{ $post->cover_image}}" style="max-width: 300px;" class="card-img" alt="...">
<br>
<br>

{!! Form::open(['action' => ['PostsController@update', $post->id], 'method' => 'POST', 'enctype' =>
'multipart/form-data']) !!}
<div class="form-group">
    {{ Form::label('title', 'Title') }}
    {{ Form::text('txtTitle', $post->title, ['class' => 'form-control', 'placeholder' => 'Title']) }}
</div>

<div class="form-group">
    {{ Form::label('body', 'Body') }}
    {!! Form::textarea('txtBody', $post->body, ['id' => 'summary-ckeditor', 'class' => 'form-control',
    'placeholder' => 'Body Content']) !!}
</div>

<div class="form-group">
    {{Form::file('cover_image')}}
</div>
{{ Form::hidden('_method', 'PUT') }}
{{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}
{!! Form::close() !!}

@endsection