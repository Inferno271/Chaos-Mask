@extends('admin.layout')

@section('title', 'Управление блогом')

@section('content')
    <h1>Управление блогом</h1>
    <a href="{{ route('admin.blog.create') }}" class="btn btn-primary mb-3">Создать новый пост</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Заголовок</th>
                <th>Дата создания</th>
                <th>Действия</th>
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->created_at->format('d.m.Y H:i') }}</td>
                    <td>
                        <a href="{{ route('admin.blog.edit', $post) }}" class="btn btn-sm btn-primary">Редактировать</a>
                        <form action="{{ route('admin.blog.destroy', $post) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Вы уверены?')">Удалить</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $posts->links() }}
@endsection