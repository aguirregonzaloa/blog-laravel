<?php

namespace App\Http\Controllers;

use App\Post;

class PostsController extends Controller
{
    public function __construct(){
    
        $this->middleware('auth')->except(['index','show']);
        
    }
    
    
    public function index(){
        

        $posts = Post::latest()
            ->filter(request(['month','year']))
            ->get();
     

        return view('posts.index',compact('posts'));
        //return response()->json($posts);
    }
    
    public function create(){
        
        return view('posts.create');
    }
    
    public function show(Post $post){
        
    
    return view('posts.show',compact('post'));
        
    }
    
    public function store(){
        
        $this->validate(request(),[
        'title'=> 'required',   
        'body' => 'required',
       
        ]);
        
        
        Post::create([
            'title' => request('title'),
            'body' =>request('body'),
            'user_id' => auth()->user()->id    
                
        ]);
        
//I do not know why this function give an error        
//It says: "Call to a member function save() on null"         
//      auth()->user()->publishpost(
//       
//          new Post(request(['title','body']))
//      
//      );
       
    
        
        return redirect()->home();
    }

}
