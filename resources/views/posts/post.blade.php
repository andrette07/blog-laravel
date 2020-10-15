@extends('layouts.app')

@section('content')
<a href="/posts" class="btn btn-light">Go Back</a>
<h1>{{ $post->title }}</h1>

<img src="/storage/cover_images/{{ $post->cover_image}}" style="max-width: 300px;" class="card-img" alt="...">
<br>
<br>
<div>
  {!! $post->body !!}
</div>
<hr>
<small>Written on {{ $post->created_at }}</small>
<hr>
@if(!Auth::guest())
@if(Auth::user()->id == $post->user_id)
<div class="d-flex">
  <a href="/posts/{{ $post->id }}/edit" class="btn btn-info" style="margin-right: 10px;">Edit</a>
  {!! Form::open(['action'=> ['PostsController@destroy', $post->id], 'method' => 'POST', 'onsubmit' =>
  'return ConfirmDelete()']) !!}

  {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}

  {{ Form::hidden('_method', 'DELETE') }}
  {!! Form::close() !!}
</div>
@endif
@endif


<script>
  function ConfirmDelete()
    {
    var x = confirm("Are you sure you want to delete?");
    if (x)
      return true;
    else
      return false;
    }
  
</script>


@endsection