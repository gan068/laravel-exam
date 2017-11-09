<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Post;

class PostController extends Controller
{
    public function index()
    {
      $posts = Post::paginate(5);
      
      return view('index', compact('posts'));
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
