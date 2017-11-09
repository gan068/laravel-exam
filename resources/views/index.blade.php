@extends('layouts.base')

@section('content')
    
<section>
    @foreach($posts as $post)
    <div class="row">
      <div class="col-md-5">
          <h2>{{$post->title}}</h2>
           {{str_limit(strip_tags(nl2br($post->content)),100)}}
           <div class="pull-right">
             <a href="{{route('post.show',$post->id)}}">more</a>
           </div>
        </div>
    </div>
    @endForeach
    <div class="row">
        <div class="col-md-5">
        {!! $posts->render() !!}
        </div>
    </div>
</section>
    

@endSection