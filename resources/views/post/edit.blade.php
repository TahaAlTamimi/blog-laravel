@extends('layouts.app')
@section('content')
    <h1>edit{{$posts->id}}</h1>
    <form method="POST"   action="/{{$posts->id}}">
{{--        @method('PATCH')--}}

        {{method_field('PATCH')}}
        @csrf
{{--        {{}} --}}
    <div class="container">


        <div class="form-group">
            <label for="exampleFormControlInput1">Title</label>
            <input type="text" class="form-control" name="title" id="exampleFormControlInput1" placeholder="title" value="{{$posts->title}}">
        </div>

        <div class="form-group">
            <label for="exampleFormControlTextarea1">Example textarea</label>
            <textarea class="form-control" name="body" id="exampleFormControlTextarea1"  rows="7"  > {{$posts->body}}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update Post</button>
    </div>
    </form>


@endsection
