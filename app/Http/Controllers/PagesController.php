<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\DB;;
use App\Cms_user;
use App\Tablet;




class PagesController extends Controller
{
    public function index(){
        $title = 'welcome to laravel';

        $posts= Post::orderBy('created_at','des')->paginate(5);
        $users = Cms_user::all();
         return view('front.home.index')->with('posts',$posts)->with('users',$users);
    }
    public function tablets(){

        $tablets = Tablet::orderBy('created_at','des')->paginate(10);
         return view('front.home.tablet.tablets')->with('tablets',$tablets);
    }

    public function posts(){
        $posts= Post::orderBy('created_at','des')->paginate(5);
         return view('front.home.post.posts')->with('posts',$posts);
     }

    public function showPost($id){
        $post = Post::find($id);
        return view('front.home.post.show')->with('post',$post);
    }
    public function showTablet($id){
       
        $tablet = Tablet::where('museum_no',$id)->first();
        return view('front.home.tablet.show')->with('tablet',$tablet);
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
