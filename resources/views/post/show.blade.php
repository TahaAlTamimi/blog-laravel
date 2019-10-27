@extends('layouts.app')
@section('content')

    <h1>showing data</h1>
    @if(count($posts)>0)
<h1>{{$posts[0]->post->title}}</h1>
    <h6>{{$posts[0]->post->body}}</h6>

<hr>
    <hr>
    <hr>
    <h1>add comment</h1>

@auth
    <form method="POST" action="/{{$posts[0]->post->id}}/show">
        {{csrf_field()}}
            @csrf
        <div class="container">

            <div class="form-group">
                <label for="exampleFormControlTextarea1">Example textarea</label>
                <textarea class="form-control" name="body" id="exampleFormControlTextarea1" placeholder="your comment:" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Add comment</button>
        </div>
    </form>

{{--    @if($comments==='Undefined')--}}
   <?php $i=0?>
    @foreach($posts as $post)

{{--        @if(count($posts)===0)--}}
{{--            <h1>no comments</h1>--}}
{{--        @else--}}
            <p>$post->id:{{$post->id}}</p>
            <p>{{$post->body}}</p>
            <p>{{$post->name}}</p>
            <?php $i=$i+1 ?>

{{--        @endif--}}
    @endforeach
@endauth
    @else

    <div class="card-header">
        <h1>
            {{$data->title}}
        </h1>
        <div class="card-body">
            <h4> {{$data->body}}</h4>

        </div>


    </div>



    <h1>no comment </h1>
    <form method="POST" action="/{{$data->id}}/show">
        {{csrf_field()}}
        @csrf
        <div class="container">

            <div class="form-group">
                <label for="exampleFormControlTextarea1">Example textarea</label>
                <textarea class="form-control" name="body" id="exampleFormControlTextarea1" placeholder="your comment:" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Add comment</button>
        </div>
    </form>
    @endif





{{--    @else--}}
{{--        <p>{{$posts[$id]->post->title}}</p>--}}
{{--    <h1>no comments</h1>--}}
{{--    @endif--}}


@endsection
