@extends('layouts.app')

@section('content')
<div id="app">
  <example-component name="{{ $post->name }}" content="{{ $post->content }}"></example-component>
</div> 
@endsection
