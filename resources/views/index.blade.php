@extends('layouts.base')

@section('content')
    
<section>
    @foreach($posts as $post)
    <div class="row">
      <div class="col-md-12">
          <h2>{{$post->title}}</h2>
           {{str_limit(strip_tags(nl2br($post->content)),100)}}
           <p align="right">
             <a href="{{route('post.show',$post->id)}}">more</a>
           </p>
        </div>
    </div>
    @endForeach
    <div class="row">
        <div class="col-md-12">
        {!! $posts->render() !!}
        </div>
    </div>
</section>
    

@endSection