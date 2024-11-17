@extends('dashboard.layout')
@section('content')

    @include('dashboard.fragment._errors-form')

    <h1>{{ $post->title }}</h1>
    <span>{{ $post->posted }}</span>
    <span>{{ $post->category->title }}</span>
    <div>
        {{ $post->description}}
    </div>
    <div>
        {{ $post->content}}
    </div>
    <span>{{ $post->image }}</span>
    <img src="/upload/posts/{{ $post->image }}" style="width:250px" alt="{{ $post->title }}">
@endsection 