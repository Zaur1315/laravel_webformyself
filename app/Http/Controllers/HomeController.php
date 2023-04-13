<?php
namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Country;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use App\Models\Post;




class HomeController extends Controller
{
    public function index(){

//        $data = Country::all();
//        $data = Country::limit(5)->get();
//        Country::query()
//        $data = Country::where('Code', '<', 'ALB')->get();
//        $data = Country::find('AZE');
//        dd($data);


//    Post::create(['title'=>'Post 5', 'content'=>'Lorem Ipsum 5']);

//        $post = new Post();
//        $post->fill(['title'=>'Post 8', 'content'=>'Lorem Ipsum 8']);
//        $post->save();

//        $post = Post::find(5);
//        $post->content = 'Hello Moto';
//        $post->save();

//        $post = Post::find(2);
//        $post->();

        Post::destroy(4);

//        Post::where('id', '>', 3)->update(['updated_at'=>NOW()]);

        return view('home');
    }

    public function test(){
        return __METHOD__;

    }

}
