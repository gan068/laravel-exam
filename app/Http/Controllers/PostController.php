<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    public function index()
    {
      return 'index';
    }
  
    public function show($id)
    {
      return "show {$id}";
    }
  
    public function create()
    {
      return "create";
    }
    
    public function store()
    {
      return "store";
    }
  
}
