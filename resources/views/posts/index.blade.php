@extends('layouts.app');

@section('content')
<div class="container">
  <h2>{{ __('Posts List') }}</h2>
  <div class="row">
    @foreach ($posts as $post)
      <div class="col-sm-6 my-2">
        <div class="card">
          <div class="card-body">
            <h3 class="post-title">{{ $post->name }}</h3>
            <p class="post-content">{{ $post->content }}</p>
            <a href="#">詳細</a>
          </div>
        </div>
      </div> 
    @endforeach
  </div>
</div>
@endsection