
@extends('layouts.app')
@section('content')
<h1>add</h1>


<form method="POST" action="/create">
    {{csrf_field()}}
{{--    @csrf--}}
    <div class="container">


    <div class="form-group">
        <label for="exampleFormControlInput1">Title</label>
        <input type="text" class="form-control" name="title" id="exampleFormControlInput1" placeholder="title">
    </div>

    <div class="form-group">
        <label for="exampleFormControlTextarea1">Example textarea</label>
        <textarea class="form-control" name="body" id="exampleFormControlTextarea1" placeholder="Descriptions:" rows="7"></textarea>
    </div>
        <button type="submit" class="btn btn-primary">Add Post</button>
    </div>
</form>



@endsection
