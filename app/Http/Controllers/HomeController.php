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

    return view('home', compact('title'));
    }
    public function test(){
        return __METHOD__;

    }

}
