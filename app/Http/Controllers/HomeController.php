<?php
namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class HomeController extends Controller
{
    public function index(){
//        dump($_ENV['']);
        return view('home');
    }

    public function test(){
        return __METHOD__;

    }

}
