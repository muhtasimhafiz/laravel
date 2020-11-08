<?php

namespace App\Http\Controllers;


use Session;
use App\Tag;
use App\User;
use App\Post;
use App\Catagory;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{

     public function home()
    {
        # code..
        $posts = Post::orderBy('created_at', 'DESC')->take(5)->get();        
        $recentPosts = Post::with('catagory','user')->orderBy('created_at', 'DESC')->paginate(9);
        return view('website.index', compact(['posts','recentPosts']));

    
    
    }
    
    public function about()
    {
        # code...
    }

    public function catagory()
    {
        # code...
    }


    public function tag()
    {
        # code...
    }

    public function contact()
    {
        # code...
    }


    public function post($slug)
    {
       $post = Post::with('catagory')->where('slug', $slug)->first();
       $posts =  Post::with('catagory')->inRandomOrder()->limit(3)->get();
      
        
       if($post){
           return view('website.post', compact(['post','posts']));
       }else{
           return redirect('/');
       }
    }

    public function send_message()
    {
        # code...
    }

}
