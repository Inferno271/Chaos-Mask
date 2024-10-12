@extends('admin.layout')

@section('title', 'Главная')

@section('content')
    <h1>Добро пожаловать в админ-панель</h1>
    <div class="row mt-4">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Пользователи</h5>
                    <p class="card-text">Всего пользователей: {{ $usersCount }}</p>
                    <a href="{{ route('admin.users.index') }}"class="btn btn-primary">Пользователи</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Маски</h5>
                    <p class="card-text">Всего масок: {{ $masksCount }}</p>
                    <a href="{{ route('admin.masks.index') }}" class="btn btn-primary">Управление масками</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Блог</h5>
                    <p class="card-text">Всего постов: {{ $blogPostsCount }}</p>
                    <a href="{{ route('admin.blog.index') }}" class="btn btn-primary">Управление блогом</a>
                </div>
            </div>
        </div>
    </div>
@endsection
