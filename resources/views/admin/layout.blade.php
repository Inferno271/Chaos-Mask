<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Админ-панель - @yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ route('admin.dashboard') }}">Админ-панель</a>
            <div class="navbar-nav">
                <a class="nav-link" href="{{ route('admin.dashboard') }}">Главная</a>
                <a class="nav-link" href="{{ route('admin.masks.index') }}">Маски</a>
                <a class="nav-link" href="{{ route('admin.users.index') }}">Пользователи</a>
                <a class="nav-link" href="{{ route('admin.blog.index') }}">Блог</a>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
