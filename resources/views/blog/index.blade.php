@extends('layouts.app')

@section('title', 'Блог - Chaos Mask')

@section('content')
<div class="blog-container">
    <h1 class="blog-title">BLOG</h1>
    
    @foreach($posts as $post)
        <article class="blog-post">
            <h2 class="post-title">{{ $post->title }}</h2>
            <p class="post-date">{{ $post->created_at->format('d.m.Y H:i') }}</p>
            
            @if($post->image)
                <div class="post-image-container">
                    <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" class="post-image">
                </div>
            @endif
            
            <div class="post-content">
                {!! nl2br(e($post->content)) !!}
            </div>
        </article>
    @endforeach

    <div class="pagination-container">
        {{ $posts->links() }}
    </div>
</div>
@endsection

@push('styles')
<style>
    .blog-container {
        width: 100%;
        padding-left: 90px; /* Учитываем ширину сайдбара */
        padding-top: 20px; /* Добавляем отступ сверху */
        position: relative;
        z-index: 10; /* Добавляем z-index выше, чем у градиентов */
        display: flex;
        flex-direction: column;
        align-items: center; /* Центрируем содержимое по горизонтали */
    }
    .blog-title {
        text-align: center;
        font-size: 3rem;
        letter-spacing: 0.5rem;
        margin-bottom: 40px;
        color: #ffffff;
    }
    .blog-post {
        background-color: #2a2a2a;
        padding: 2rem;
        border-radius: 0.5rem;
        margin-bottom: 30px;
        width: 70%;
    }
    .post-title {
        color: #ffffff;
        margin-bottom: 10px;
    }
    .post-date {
        color: #888;
        margin-bottom: 20px;
    }
    .post-image-container {
        margin-bottom: 20px;
    }
    .post-image {
        width: 100%;
        max-height: 400px;
        object-fit: cover;
        border-radius: 5px;
    }
    .post-content {
        color: #ffffff;
        line-height: 1.6;
    }
    
    .pagination-container {
        display: flex;
        justify-content: center;
        margin-top: 30px;
    }
    .pagination {
        display: flex;
        list-style-type: none;
        padding: 0;
        margin: 0;
    }
    .page-item {
        margin: 0 2px;
    }
    .page-link {
        color: #ffffff;
        background-color: #2a2a2a;
        border: 1px solid #444;
        padding: 5px 10px;
        border-radius: 3px;
        text-decoration: none;
        font-size: 14px;
        transition: background-color 0.3s ease;
    }
    .page-item.active .page-link {
        background-color: #444;
    }
    .page-link:hover {
        background-color: #3a3a3a;
    }
    .page-item.disabled .page-link {
        color: #666;
        pointer-events: none;
    }
</style>
@endpush