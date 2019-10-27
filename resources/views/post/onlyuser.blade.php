@extends('layouts.app')
@section('content')

    <h1>Your blogs</h1>

    @if(count($posts)>0)
    @foreach($posts as $post)
        {{--    <h1>{{$post->title}}</h1>--}}
        {{--<h1>{{$post->body}}</h1>--}}
        <div class="card bg-light mb-3" style="max-width: 18rem;">
            <div class="card-header">{{$post->title}}</div>
            <div class="card-body">
                <p class="card-text">{{$post->body}}</p>
                <a href="/{{$post->id}}/edit" class="btn btn-primary">Edit</a>
                <form METHOD="post"   action="/{{$post->id}}">
                    {{method_field('DELETE')}}
                    {{csrf_field()}}
                    <button class="btn btn-danger">Delete</button>
                </form>
                <h6 class="card-title">written on: {{$post->created_at }}</h6>
                <h6> written by:{{$post->user->name}}</h6>
            </div>


    @endforeach
            @else

                <h1 class="p-3 mb-2 bg-success text-white">you don't have any post </h1>
                <form action="/create" > <button class="btn btn-primary">  Make New Post</button> </form>
        @endif

@endsection
