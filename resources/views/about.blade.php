@extends('layouts.app')

@section('title', 'О нас - Chaos Mask')

@section('content')
<div class="about-container">
    <h1 class="about-title">ABOUT US</h1>
    <div class="about-image-container">
            <img src="{{ asset('images/backgrounddiv_about.png') }}" alt="О нас фон" class="about-background-image">
            <div class="about-overlay">
                <p class="about-text">
                    Наш бренд сочетает традиции и современное искусство, создавая уникальные маски ручной работы. Мы верим, что каждая маска несет в себе душу и историю, отражая мастерство и страсть наших мастеров.
                </p>
            </div>
    </div>
    
    <h2 class="about-title-section">OUR MISSION</h2>
    <div class="mission-container">
        <div class="mission-content">
            <img src="{{ asset('images/mission.png') }}" alt="Наша миссия" class="mission-image">
            <p class="mission-text">
                Наша миссия — создавать изделия, которые вдохновляют и украшают жизнь наших клиентов, соединяя в себе традиционные техники и современный дизайн.
            </p>
        </div>
    </div>

    <h2 class="about-title-section">TEAM</h2>
    <div class="team-container">
        <div class="team-member">
            <div class="team-image-container">
                <img src="{{ asset('images/Victoria.png') }}" alt="Виктория Тишкевич" class="team-image">
            </div>
            <div class="team-info">
                <h3 class="team-name">Виктория Тишкевич</h3>
                <p class="team-role">Дизайнер/Администратор</p>
            </div>
        </div>
        <div class="team-member">
            <div class="team-image-container">
                <img src="{{ asset('images/Anatoly.png') }}" alt="Анатолий Киневский" class="team-image">
            </div>
            <div class="team-info">
                <h3 class="team-name">Анатолий Киневский</h3>
                <p class="team-role">Дизайнер/Мастер</p>
            </div>
        </div>
        <div class="team-member">
            <div class="team-image-container">
                <img src="{{ asset('images/Dmitry.png') }}" alt="Дмитрий Клим" class="team-image">
            </div>
            <div class="team-info">
                <h3 class="team-name">Дмитрий Клим</h3>
                <p class="team-role">Моделлер/Мастер</p>
            </div>
        </div>
    </div>

    <h2 class="about-title-section">STORY</h2>
    <div class="story-container">
        <p class="story-text">
        "История нашего бренда началась с идеи возродить древние традиции масочного искусства. С годами мы расширили наши границы, добавив элементы современного дизайна и инновационные материалы, сохраняя верность своему наследию."
        </p>
    </div>
    <div class="cta-container">
        <p class="cta-text">
            Хотите узнать больше о нашем искусстве или присоединиться к нам? Свяжитесь с нами или посетите наш магазин, чтобы стать частью этого уникального мира.
        </p>
        <div class="cta-buttons">
            <a href="{{ route('contact') }}" class="cta-button">Связаться с нами</a>
            <a href="{{ route('catalog') }}" class="cta-button">Купить маску</a>
        </div>
    </div>
</div>

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/about_styles.css') }}">
@endpush

@endsection
