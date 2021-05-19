@extends('layouts.app')

@section('content')
    <div class="title">新規作成</div>
    <div class="row justify-content-center">
      <div class="col-6">
        <div class="card">
          <div class="card-body">
            <form action="{{ route('posts.update', $post->id) }}" method="POST">
              @csrf
              <div class="form-group">
                <label for="name" class="col-form-label">{{ __('name') }}</label>
                <input type="text" name="name" class="form-control" value="{{ $post->name }}">
                @error('name')
                  <span  class="err_msg" role="alert"><strong>{{ $message }}</strong></span>
                @enderror
              </div>
              <div class="form-group">
                <label for="name" class="col-form-label">{{ __('content') }}</label>
                <textarea name="content" id="" cols="30" rows="10" class="form-control">{{ $post->content }}</textarea>
                @error('content')
                  <span  class="err_msg" role="alert"><strong>{{ $message }}</strong></span>
                @enderror
              </div>
              <input type="submit" value="送信" class="btn btn-primary">
            </form>
          </div>
        </div>
      </div>
    </div>
@endsection

<style>


</style>