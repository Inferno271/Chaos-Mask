@extends('admin.layout')

@section('title', 'Редактирование маски')

@section('content')
    <h1>Редактирование маски</h1>
    <form action="{{ route('admin.masks.update', $mask->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Название</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $mask->name }}" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Описание</label>
            <textarea class="form-control" id="description" name="description" rows="3">{{ $mask->description }}</textarea>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Цена</label>
            <input type="number" class="form-control" id="price" name="price" value="{{ $mask->price }}" step="0.01" required>
        </div>
        <div class="mb-3">
            <label for="category" class="form-label">Категория</label>
            <select class="form-select" id="category" name="category" required>
                <option value="facial" {{ $mask->category == 'facial' ? 'selected' : '' }}>Для лица</option>
                <option value="decorative" {{ $mask->category == 'decorative' ? 'selected' : '' }}>Декоративная</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Изображение</label>
            <input type="file" class="form-control" id="image" name="image" accept="image/*">
            @if($mask->image)
                <img src="{{ asset('storage/' . $mask->image) }}" alt="{{ $mask->name }}" class="mt-2" style="max-width: 200px;">
            @endif
        </div>
        <button type="submit" class="btn btn-primary">Обновить маску</button>
    </form>
@endsection
