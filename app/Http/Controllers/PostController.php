<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\SessionGuard;
use App\Post;
use App\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()



    {
//        $users = Auth::user();
//      $posts=  Post::where('author',  $user_id)->with('user')->get();
       // $posts=Post::all();
       // $username = Auth::user()->name ;
       // $posts=Post::get();
//     dd($posts);
//        return $posts;
        $posts=  Post::with('user')->get();
        return view('post.main')->with('posts',$posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

//        return request()->all();
////        dd('hello');
        $userId = Auth::id();
//        $username = Auth::user()->name ;
//        dd($request);
//        $username=$id;
//        dd($username);

        Post::create([
            'title' => $request->input('title'),
            'body' => $request->input('body'),
            'author' => $userId
        ]);
        return redirect('/');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $user_id = Auth::id();
        $posts=  Post::where('author',  $user_id)->with('user')->get();
//        return $posts;
        return view('post.onlyuser')->with('posts',$posts);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
//        $user_id = Auth::id();
////      $posts=  Post::where('author',  $user_id)->with('user')->get();
////        $posts=  Post::with('user')->findOrFail($id);
////        $posts = Post::findOrFail($id);
////       dd($posts);
//////return view('post.edit');
/////
//$user_id = Auth::id();
    $posts=Post::find($id);
////    dd($post);
        return view('post.edit',compact('posts'));
//  dd(request()->all());




    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
//

        $post = Post::findOrFail($id);
        $post->update([
            'title'=>$request->input('title'),
        'body'  => $request->input('body')
        ]);
        return redirect('onlyuser');




//        first waybut without 'Request' and '$request 'in parameters only'$id' must be found
//        $posts=Post::find($id);
//        $posts->title=request('title');
//        $posts->body=request('body');
//        $posts->save();
//        return redirect('onlyuser');

//        end first way


//        return redirect()->route(' post.onlyuser');
//        return $posts;
//        return view('post.onlyuser')->with('posts',$posts);
//        return view('post.onlyuser',compact('posts'));
//        return redirect('/onlyuser');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         Post::where('id',$id)->delete();
        return redirect('/onlyuser');
        //
    }
    public function showin($id)
    {
//        $user_id = Auth::id();
//        where('author',  $user_id)->with('user')->
//        $posts=Post::find($id);
//        return $posts;
//        return view('post.show',compact('posts'));
        return redirect('/onlyuser');
    }
}
