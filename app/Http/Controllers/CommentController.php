<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Post;
use App\Comment;
use Validator;

class CommentController extends Controller
{

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
                'content' => 'required',
                'post_id' => 'required',
                ], [
                'content.required' => '留言內文必填',
                'post_id.required' => '文章編號必填',
        ]);

        if ($validator->fails()) {
            return redirect()
                    ->back()
                    ->withErrors($validator)
                    ->withInput();
        }
        $post_id = $request->get('post_id');
        $post = Post::findOrFail($post_id);
        $comment = new Comment();
        $comment->content = $request->get('content');
        $post->comments()->save($comment);
        return redirect()->to(route('post.show', $post_id))->with('message', '留言完成');
    }
}
