<?php
namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Country;
use App\Models\Rubric;
use App\Models\Tag;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use App\Models\Post;




class HomeController extends Controller
{
    public function index()
    {

//        $post = Post::find(5);
//        dump($post->title, $post->rubric);
//        return view('home');
//        $posts = Rubric::find(1)->posts()->select('title')->where('id', '>', '2')->get();
//        dump($posts);

//        $posts = Post::with('rubric')->where('id','>', '1')->get();
//        foreach ($posts as $post){
//            dump($post->title, $post->rubric->title);
//        }
//    }

//        $post = Post::find(2);
//        dump($post->title);
//        foreach ($post->tags as $tag){
//            dump($tag->title);
//        }

        $tag = Tag::find(1);
        dump($tag->title);
        foreach ($tag->posts as $post){
            dump($post->title);
        }

    }
    public function test(){
        return __METHOD__;

    }

}
