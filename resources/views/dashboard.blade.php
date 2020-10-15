@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    Welcome {{ Auth::user()->name }}

                    <hr>
                    @if (count($posts) > 0)
                    @foreach ($posts as $post)
                    <div class="card mb-3 post-card" style="max-width: 800px;">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="/storage/cover_images/{{ $post->cover_image}}" class="card-img" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h3><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h3>
                                    <small>Written on {{ $post->created_at }}</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    @endforeach

                    @endif
                </div>
            </div>
        </div>
    </div>

</div>
@endsection