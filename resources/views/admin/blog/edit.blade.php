@extends('admin.layout')

@section('title', 'Редактирование поста')

@section('content')
    <h1>Редактирование поста</h1>
    <form action="{{ route('admin.blog.update', $post) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Заголовок</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}" required>
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Содержание</label>
            <textarea class="form-control" id="content" name="content" rows="10" required>{{ $post->content }}</textarea>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Изображение</label>
            <input type="file" class="form-control" id="image" name="image">
            @if($post->image)
                <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}" class="mt-2" style="max-width: 200px;">
            @endif
        </div>
        <button type="submit" class="btn btn-primary">Обновить пост</button>
    </form>
@endsection