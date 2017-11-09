<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index()
    {
      return view('index');
    }
  
    public function show($id)
    {
      return view('post.show', compact('id'));
    }
  
    public function create()
    {
      return view('post.create');
    }
    
    public function store()
    {
      return "store";
    }
  
}
