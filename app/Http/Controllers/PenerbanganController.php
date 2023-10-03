<?php

namespace App\Http\Controllers;

use App\Models\Penerbangan;
use Illuminate\Http\Request;

class PenerbanganController extends Controller
{

    public function index()
    {
        $posts = Penerbangan::all();
        return view('tickets', ['posts' => $posts]);
    }
}