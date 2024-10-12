@extends('layouts.app')

@section('title', $post->title . ' - Chaos Mask')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-8 offset-lg-2">
            <article class="blog-post bg-white shadow-sm rounded p-4">
                <h1 class="mb-4 text-primary">{{ $post->title }}</h1>
                
                <div class="meta text-muted mb-4">
                    <i class="fas fa-user"></i> {{ $post->user->name ?? 'Неизвестный' }}
                    <span class="mx-2">|</span>
                    <i class="far fa-calendar-alt"></i> {{ $post->created_at->format('d.m.Y H:i') }}
                </div>

                @if($post->image)
                    <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" class="img-fluid rounded mb-4">
                @endif

                <div class="blog-content">
                    {!! nl2br(e($post->content)) !!}
                </div>

                <div class="mt-5">
                    <a href="{{ route('blog.index') }}" class="btn btn-outline-primary">
                        <i class="fas fa-arrow-left"></i> Назад к списку постов
                    </a>
                </div>
            </article>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
    .blog-post {
        font-size: 1.1rem;
        line-height: 1.8;
    }
    .blog-post h1 {
        font-weight: bold;
    }
    .blog-content {
        text-align: justify;
    }
</style>
@endpush