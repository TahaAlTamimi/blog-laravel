<?php

namespace App\Http\Controllers;
use App\Comment;
use App\Post;
use App\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $data = Post::find($id);
//        return $blog;
        $posts=Comment::with('post','user')->where('postId',$id)->get();
////   $Post2=Comment::with('user')->where('author',$author)->get();
//return ($posts);
        return view('post.show',compact('posts','id','data'));




//        return $id;
////        $comments=Comment::with('post','user')->where('postId',$id)->get();
//        $posts=Post::find($id);
//        $posts[$id]=Comment::with('post')->get();
////        return $posts->title;
////        ->where('postId',$id)with('post')->
//        return view('post.show',compact('posts'));

    }
//    public function add (Request $request, $id) {
////        return "comment";
//        $user_id = Auth::id();
//        if($user_id){
//            Comment::create([
//                'body' => $request->input('body'),
//                'user_id' => $user_id,
//                'postId' => $id
//            ]);
//            return redirect()->route('get_comments',$id);}
//        else return redirect()->route("login");
//    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
//        dd('hello');
//        return view('post.show');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$id)
    {
//
//        return $id;
        Comment::create(
            [  'postId'=>$id,
                'body'=>$request->input('body'),
                'author'=>Auth::id()]
        );

        $posts=Comment::with('post','user')->where('postId',$id)->get();
//        return $posts[0]->user->name;
//
        return view('post.show',compact('posts','id'));
//        return $comments[0]->user;
//        comment1in1

//        $userId = Auth::id();
//
//////        $userId = Post::id();
////      return $id;
////        dd($request);
////        return $request;
//        $posts=Post::find($id);
//        return $posts;
////        return view('post.show',compact('posts'));
////
//       $comments= Comment::create([
//            'body' => $request->input('body'),
//            'author' => $userId,
//             'postId' => $id
//        ]);
//
//return $comments;
////return view('post.show',compact('comments'));
////        return redirect('/{post}/show',compact('posts'));
///
/////
//        $userId = Auth::id();
//
//
//       $posts= Comment::create(
//            [  'postId'=>$id,
//                'body'=>$request->input('body'),
//                'author'=>Auth::id()]
//        );
////        where('postId',$id)->with('post')->
//        $posts=Comment::with('post')->where('postId',$id)->get();
//        return $posts;
//        return view('post.show',compact('posts','id'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
