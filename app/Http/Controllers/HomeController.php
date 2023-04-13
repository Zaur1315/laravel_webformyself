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

        $title = 'Home Page';
        $posts = Post::orderBy('id', 'desc')->get();



    return view('home', compact('title', 'posts'));
    }

    public function create()
    {
        $title = 'Create Post';
        $rubrics = Rubric::pluck('title', 'id')->all();
        return view('create', compact('title', 'rubrics'));
    }

    public function store(\Illuminate\Http\Request $request)
    {
//        dd($request);
        Post::create($request->all());
        return redirect()->route('home');
    }

}
