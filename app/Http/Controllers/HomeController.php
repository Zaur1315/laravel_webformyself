<?php
namespace App\Http\Controllers;

use App\Models\Rubric;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Cookie;


class HomeController extends Controller
{
    public function index(Request $request)
    {

//    Cache::put('key', 'Value', 60);

//    dump(Cache::get('key'));

        Cache::flush();

    if(Cache::has('posts')){
        $posts = Cache::get('posts');
    }else{
        $posts = Post::orderBy('id', 'desc')->get();
        Cache::put('posts', $posts);
    }


        $title = 'Home Page';

        return view('home', compact('title', 'posts'));
    }

    public function create()
    {
        $title = 'Create Post';
        $rubrics = Rubric::pluck('title', 'id')->all();
        return view('create', compact('title', 'rubrics'));
    }

    public function store(Request $request)
    {

        $this->validate($request,[
           'title'=> 'required|min:5|max:100',
           'content'=>'required',
           'rubric_id'=>'integer',
        ]);


        Post::create($request->all());
        $request->session()->flash('success', 'Данные сохраненны');
        return redirect()->route('home');
    }

}
