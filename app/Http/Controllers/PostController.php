<?php

namespace App\Http\Controllers;

use App\Models\Penerbangan;
use Illuminate\Http\Request;

class PostController extends Controller
{
    
    public function index(){
        $posts = Penerbangan::all(); 
        return response()->json(['posts' => $posts]);
    }
}
