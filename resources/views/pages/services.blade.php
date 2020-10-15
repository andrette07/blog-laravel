@extends('layouts.app')

@section('content')


<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
    <div class="container">
        <h1 class="display-3">Hello, world!</h1>
        <p>This is a template for a simple marketing or informational website. It includes a large callout called a
            jumbotron and three supporting pieces of content. Use it as a starting point to create something more
            unique.</p>
        <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p>
    </div>
</div>

@if (count($services) > 0)
<ul class="list-group">
    @foreach ($services as $service)

    <li class="list-group-item">{{$service}}</li>

    @endforeach
</ul>
@endif

@endsection