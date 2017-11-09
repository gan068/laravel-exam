@extends('layouts.base')

@section('content')
<section>
    <div class="row">
        <div class="col-md-5">
            <h2>{{$post->title}}</h2>
            {!!nl2br($post->content)!!}
            <p align="right">文章建立時間：{{$post->created_at}}</p>
        </div>
    </div>
<section>
<section>
    <div class="row">
        <div class="col-md-5">
            <h3>我要留言</h3>
            <form method="post" action="{{route('comment.store')}}">
                <input type="hidden" name="_method" value="put">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="post_id" value="{{$post->id}}">
                <textarea name="content" class="form-control" cols="40" rows="10"></textarea>
                <p align="right">
                    <button type="submit" class="btn btn-default">送出留言</button>
                </p>
            </form>
        </div>
    </div>
</section>
<section>
    <div class="row">
        <div class="col-md-5">
            <h3>留言列表</h3>
            @foreach($post->comments()->orderBy('created_at','ASC')->get() as $comment)
            <p>{!! nl2br(strip_tags($comment->content)) !!}</p>
            <p align="right">留言時間：{{$comment->created_at }}</p>
            <hr>
            @endForeach
        </div>
    </div>
</section>
@endSection
