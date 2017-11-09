<?php

use Illuminate\Database\Seeder;
use App\Post;
use App\Comment;

class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = Post::all();
        foreach($posts as $post){
          $comment = factory(Comment::class)->make();
          $post->comments()->save($comment);
        }
    }
}
