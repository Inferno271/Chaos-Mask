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

    @yield('scripts')
    @stack('scripts')
    <script src="{{ asset('js/scroll-to-top.js') }}"></script>

</body>
</html>