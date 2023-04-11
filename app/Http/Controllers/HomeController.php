<?php
namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){

//        DB::insert("INSERT INTO posts (title, content) VALUES (?, ?)", ['Post 4', 'Lorem Ipsum 4']);
//        $posts = DB::select("SELECT * FROM posts");
//        $posts = DB::select("SELECT * FROM posts WHERE id > :id", ['id'=>2]);

        DB::update("UPDATE posts SET created_at = ?, updated_at = ? WHERE created_at IS NULL OR updated_at IS NULL ", [NOW(), NOW()]);

//        dump($posts);
    }

    public function test(){
        return __METHOD__;

    }

}
