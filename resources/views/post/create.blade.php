@extends('layouts.base')

@section('content')
<section>
    <div class="row">
        <div class="col-md-12">
            <h3>新增文章</h3>
            <form method="post" action="{{route('post.store')}}">
                <input type="hidden" name="_method" value="put">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <div class="form-group">
                <label>文章標題</label>
                <input type="text" name="title" class="form-control">
              </div>
              <div class="form-group">
                <label>文章內文</label>
                <textarea name="content" class="form-control" cols="40" rows="10"></textarea>
              </div>
                <p align="right">
                    <button type="submit" class="btn btn-default">送出文章</button>
                </p>
            </form>
        </div>
    </div>
</section>
@endSection
