@extends('layouts.app')

@section('title', $post->title . ' - Chaos Mask')

@section('content')
<div class="blog-post-container">
    <h1 class="blog-post-title">{{ $post->title }}</h1>
    
    @if($post->image)
        <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" class="blog-post-image">
    @endif
    
    <div class="blog-post-content">
        {!! $post->content !!}
    </div>
    
    <div class="blog-post-meta">
        <p>Опубликовано: {{ $post->published_at->format('d.m.Y') }}</p>
    </div>
    
    <a href="{{ route('blog.index') }}" class="back-to-blog-btn">Назад к блогу</a>
</div>
@endsection
