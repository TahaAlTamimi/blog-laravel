@extends('layouts.app')
@section('content')

<h1> blogs</h1>
@foreach($posts as $post)
{{--    <h1>{{$post->title}}</h1>--}}
{{--<h1>{{$post->body}}</h1>--}}
<div class="card bg-light mb-3" style="max-width: 18rem;">
    <div class="card-header">{{$post->title}}</div>
    <div class="card-body">
        <p class="card-text">{{$post->body}}</p>
        @if($post->user->id>0)
        <a href="/{{$post->id}}/show" class="btn btn-primary">read</a>
        @else
            <a href="#" class="btn btn-success">resgister</a>
            @endif
        <h6 class="card-title">written on: {{$post->created_at }}</h6>
<h6> written by:{{$post->user->name}}</h6>
    </div>

    @endforeach
@endsection
