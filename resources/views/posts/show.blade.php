@extends('layouts.app')

@section('content')
<div id="app">
  <example-component name="{{ $post->name }}" content="{{ $post->content }}" :posts ="{{ $posts }}"></example-component>
</div> 
@endsection
