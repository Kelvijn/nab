<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PagesController extends Controller
{
    public function index(){
        $title = 'welcome to laravel';

        $posts= Post::orderBy('created_at','des')->paginate(5);
       // return view('front.home.index');
        
         return view('front.home.index')->with('posts',$posts);
    }

    public function about(){
        $title = 'welcome to about';        
        return view('pages.about')->with('title',$title);
    }
    public function services(){
        $data = array(
            'title' => 'Services',
            'quote' => 'Quote of the day',
            'services' => ['Web services','Chat service',"Weather service"]
        );
        return view('pages.services')->with($data);
    }
}
