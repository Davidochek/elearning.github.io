@extends('user/app')
@section('bg-img', Storage::disk('local')->url($post->image))
@section('title', $post->title)
@section('sub-title', $post->subtitle)
@section('main-content')
<article>
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-md-10 mx-auto">
            <small>Created {{$post->created_at->diffForHumans()}}</small>
              @foreach ($post->categories as $category) 
            <small class="pull-right" style="margin-right: 20px; border-radius: 5px; border: 1px solid grey; padding: 5px;">
              <a href="">{{$category->name}}</a>
             </small>
              @endforeach
              <br>
              <br>
           {!!htmlspecialchars_decode($post->body)!!}
           <h3>Tag Clouds</h3>
           @foreach ($post->tags as $tag)
           <a href="">
           <small class="pull-left" style="margin-right: 20px; border-radius: 5px; border: 1px solid grey; padding: 5px;">
              {{$tag->name}}
             </small>
             </a>
              @endforeach
          </div>
        </div>
      </div>
    </article>

    <hr>

@endsection