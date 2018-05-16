@extends('user/app')
@section('bg-img', asset('blog/img/home-bg.jpg'))
@section('title', 'MMu Stories')
@section('sub-title', 'Lets Learn Together, we Grow Together')

@section('main-content')
<!-- Main Content -->
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          @foreach ($posts as $post)
              <div class="post-preview">
                <a href="{{ route ('posts', $post->slug) }}">
                  <h2 class="post-title">
                    {{$post->title}}
                  </h2>
                  <h3 class="post-subtitle">
                    {{$post->subtitle}}
                  </h3>
                </a>
                <p class="post-meta">Posted by
                  <a href="#">Admin</a>
                  {{$post->created_at->diffForHumans()}}</p>
              </div> 
          @endforeach
          
          
          <!-- Pager -->
          <div class="clearfix text-center">
            <button type="button" class="btn btn-primary">{{$posts->links()}}</button>
          </div>
        </div>
      </div>
    </div>

    <hr>
@endsection