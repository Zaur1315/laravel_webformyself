<?php
namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Country;
use App\Models\Rubric;
use App\Models\Tag;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use App\Models\Post;
use Illuminate\Support\Facades\Validator;


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

    public function store(Request $request)
    {

        $this->validate($request,[
           'title'=> 'required|min:5|max:100',
           'content'=>'required',
           'rubric_id'=>'integer',
        ]);

//        $rules = [
//           'title'=> 'required|min:5|max:100',
//           'content'=>'required',
//           'rubric_id'=>'integer',
//           ];
//
//        $messages = [
//            'title.required' => 'Заполните поле заголовка',
//            'title.min' => 'Минимум 5 символов',
//            'title.max' => 'Максимум 100 символов',
//            'content.required' => 'Заполните поле контента',
//            'rubric_id.integer'=> 'Выберите рубрику'
//        ];
//
//        $validator = Validator::make($request->all(), $rules, $messages)->validate();


        Post::create($request->all());
        return redirect()->route('home');
    }

}
