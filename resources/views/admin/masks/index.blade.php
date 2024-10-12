@extends('admin.layout')

@section('title', 'Управление масками')

@section('content')
    <h1>Управление масками</h1>
    <a href="{{ route('admin.masks.create') }}" class="btn btn-primary mb-3">Добавить новую маску</a>
    
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Название</th>
                <th>Категория</th>
                <th>Цена</th>
                <th>Действия</th>
            </tr>
        </thead>
        <tbody>
            @foreach($masks as $mask)
                <tr>
                    <td>{{ $mask->id }}</td>
                    <td>{{ $mask->name }}</td>
                    <td>{{ $mask->category }}</td>
                    <td>{{ $mask->price }}</td>
                    <td>
                        <a href="{{ route('admin.masks.edit', $mask) }}" class="btn btn-sm btn-primary">Редактировать</a>
                        <form action="{{ route('admin.masks.destroy', $mask) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Вы уверены?')">Удалить</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $masks->links() }}
@endsection
