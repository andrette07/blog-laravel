@extends('layouts.app')

@section('content')
<h1>Create a New Post</h1>

{!! Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
<div class="form-group">
    {{ Form::label('title', 'Title') }}
    {{ Form::text('txtTitle', '', ['class' => 'form-control', 'placeholder' => 'Title']) }}
</div>

<div class="form-group">
    {{ Form::label('body', 'Body') }}
    {{ Form::textarea('txtBody', '', ['id' => 'summary-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body Content']) }}
</div>

<div class="form-group">
    {{Form::file('cover_image')}}
</div>

{{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}
{!! Form::close() !!}

@endsection