<?php
namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Country;
use App\Models\Rubric;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use App\Models\Post;




class HomeController extends Controller
{
    public function index(){

//        $post = Post::find(5);
//        dump($post->title, $post->rubric);
//        return view('home');
//        $posts = Rubric::find(1)->posts()->select('title')->where('id', '>', '2')->get();
//        dump($posts);

        $posts = Post::with('rubric')->where('id','>', '1')->get();
        foreach ($posts as $post){
            dump($post->title, $post->rubric->title);
        }
    }

    public function test(){
        return __METHOD__;

    }

}
