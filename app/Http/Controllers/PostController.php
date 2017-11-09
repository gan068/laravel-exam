<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Post;
use Validator;

class PostController extends Controller
{

    public function index()
    {
        $posts = Post::orderBy('created_at', 'DESC')->paginate(5);

        return view('index', compact('posts'));
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('post.show', compact('post'));
    }

    public function create()
    {
        return view('post.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
                'title' => 'required',
                'content' => 'required',
                ], [
                'title.required' => '文章標題必填',
                'content.required' => '文章內文必填',
        ]);

        if ($validator->fails()) {
            return redirect()
                    ->back()
                    ->withErrors($validator)
                    ->withInput();
        }
        $post = new Post();
        $post->title = $request->get('title');
        $post->content = $request->get('content');
        $post->save();
        return redirect()->to(route('home'))->with('message', '新增文章完成');
    }
}
