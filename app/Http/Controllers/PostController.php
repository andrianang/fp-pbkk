<?php

namespace App\Http\Controllers;

use App\Models\Penerbangan;
use Illuminate\Http\Request;

class PostController extends Controller
{
    
    public function index(){
        $posts = Penerbangan::all(); 
<<<<<<< HEAD
        return view('tickets')->with('posts', $posts);
=======
    
        return response()->json(['posts' => $posts]);
>>>>>>> 1eefb173ec858114943c6efbfa11177b67fb618c
    }
}
