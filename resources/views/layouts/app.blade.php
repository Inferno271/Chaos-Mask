<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Chaos Mask')</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/scroll-to-top.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    @yield('additional_styles')
    @stack('styles')
    <link rel="stylesheet" href="{{ asset('css/blog.css') }}">
    <link rel="stylesheet" href="{{ asset('css/modal.css') }}">
</head>


<body>
    <div class="background"></div>
    <div class="gradient-overlay"></div>
    <div class="new-gradient-overlay"></div>

    <div class="content">
        @yield('content')
    </div>

    @include('components.sidebar')
    <x-scroll-to-top />
    @include('components.footer')
    @yield('additional_content')

    <!-- Модальное окно для авторизации -->
    <div id="loginModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            @include('auth.login')
            <p>Нет аккаунта? <a href="#" id="showRegisterBtn">Зарегистрироваться</a></p>
        </div>
    </div>

    <!-- Модальное окно для регистрации -->
    <div id="registerModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            @include('auth.register')
        </div>
    </div>

    @yield('scripts')
    @stack('scripts')
    <script src="{{ asset('js/scroll-to-top.js') }}"></script>
    <script src="{{ asset('js/modal.js') }}"></script>

    <script>
        // Закрытие модального окна при клике на крестик или вне окна
        window.onclick = function(event) {
            if (event.target.className === 'modal' || event.target.className === 'close') {
                event.target.closest('.modal').style.display = 'none';
            }
        }

        // Переключение между окнами входа и регистрации
        document.getElementById('showRegisterBtn').onclick = function() {
            document.getElementById('loginModal').style.display = 'none';
            document.getElementById('registerModal').style.display = 'block';
        }
    </script>
</body>
</html>