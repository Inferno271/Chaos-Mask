@extends('layouts.app')

@section('title', 'Блог - Chaos Mask')

@section('content')
<div class="blog-container">
    <h1 class="blog-title">Блог Chaos Mask</h1>
    
    <div class="blog-posts">
        @forelse($posts as $post)
            <div class="blog-post-card">
                @if($post->image)
                    <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" class="blog-post-image">
                @endif
                <h2 class="blog-post-title">{{ $post->title }}</h2>
                <p class="blog-post-excerpt">{{ Str::limit(strip_tags($post->content), 150) }}</p>
                <a href="{{ route('blog.show', $post->slug) }}" class="read-more-btn">Читать далее</a>
            </div>
        @empty
            <p>Пока нет опубликованных постов.</p>
        @endforelse
    </div>
    
    {{ $posts->links() }}
</div>
@endsection
