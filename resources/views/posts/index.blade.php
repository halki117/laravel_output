@extends('layouts.app')

@section('content')
<div class="container">
  <h2>{{ __('Posts List') }}</h2>
  <div class="row">
    @foreach ($posts as $post)
      <div class="col-sm-6 my-2">
        <div class="card">
          <div class="card-body">
            <h3 class="post-title">{{ $post->name }}</h3>
            @if (mb_strlen($post->content) > 5)
              <p class="post-content">{{ substr($post->content, 0, 5)."..." }}</p>
            @else
              <p class="post-content">{{ $post->content }}</p>
            @endif
            <a href="{{ route('posts.show', $post->id ) }}" class="btn btn-primary">詳細</a>
            <a href="{{ route('posts.edit', $post->id ) }}" class="btn btn-success">編集</a>
            <form action="{{ route('posts.delete', $post->id ) }}" method="post" class="d-inline">
              @csrf
              <button class="btn btn-danger" onclick="return confirm('削除しますか？'); ">削除</button>
            </form>
          </div>
        </div>
      </div> 
    @endforeach
  </div>
</div>
@endsection 