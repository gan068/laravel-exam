<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Post;
use App\Comment;

class CommentController extends Controller
{
    public function store(Request $request)
    {
      $post_id = $request->get('post_id');
      $post = Post::findOrFail($post_id);
      $comment = new Comment();
      $comment->content = $request->get('content');
      $post->comments()->save($comment);
      return redirect()->to(route('post.show', $post_id));
    }
}
