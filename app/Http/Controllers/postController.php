<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class postController extends Controller
{
    public function index()
    {
        
        return view('posts.index');

    }

    public function create()
    {
    	return view('posts.create');
    }



}
