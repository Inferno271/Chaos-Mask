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
@endsection

@section('additional_styles')
<style>
    .about-container {
        width: 100%;
        padding-left: 90px; /* Учитываем ширину сайдбара */
        padding-top: 20px; /* Добавляем отступ сверху */
        position: relative;
        z-index: 10; /* Добавляем z-index выше, чем у градиентов */
        display: flex;
        flex-direction: column;
        align-items: center; /* Центрируем содержимое по горизонтали */
    }

    .about-title {
        font-size: 48px; /* Увеличиваем размер заголовка */
        color: #ffffff;
        text-align: center;
        margin-bottom: 20px;
        text-transform: uppercase; /* Добавляем для соответствия дизайну */
    }

    .about-title-section {
        font-size: 36px; /* Увеличиваем размер заголовка */
        color: #ffffff;
        text-align: center;
        margin: 40px 0 20px 0 ;
        text-transform: uppercase; /* Добавляем для соответствия дизайну */
    }

    .about-image-container {
        position: relative;
        width: 100%;
        height: 200px;
        overflow: hidden;
        z-index: 11;
    }

    .about-image-frame {
        width: 100%;
        height: 100%;
        position: relative;
    }

    .about-background-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .about-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.6);
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .about-text {
        color: #ffffff;
        font-size: 22px;
        text-align: center;
        max-width: 90%;
        line-height: 1.5;
        padding: 20px;
    }

    /* Добавляем стили для лого, чтобы оно не перекрывалось с контентом */
    .logo-container {
        z-index: 30; /* Убедитесь, что это значение больше, чем у .about-container */
    }

    .mission-container {
        width: calc(100% - 333px); /* 100% минус сумма отступов слева и справа */
        max-width: 1110px;
        height: 534px;
        background-color: #000000;
        margin: 0 auto 0 auto; /* Используем auto для горизонтального центрирования */
        padding: 0;
        box-sizing: border-box;
        overflow: hidden;
    }

    .mission-content {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .mission-image {
        width: 100%;
        height: auto;
    }

    .mission-text {
        color: #ffffff;
        font-size: 18px;
        text-align: center;
        max-width: 90%;
        line-height: 1.5;
    }

    .team-container {
        width: calc(100% - 333px); /* 100% минус сумма отступов слева и справа */
        max-width: 1110px;
        display: flex;
        justify-content: space-between;
    }

    .team-member {
        width: 340px;
        height: 417px;
        background-color: #0E0E0E;
        overflow: hidden;
        display: flex;
        flex-direction: column;
    }

    .team-image-container {
        width: 100%;
        height: 300px; /* Фиксированная высота для всех изображений */
        overflow: hidden;
    }

    .team-image {
        width: 100%;
        height: 100%;
        object-fit: cover; /* Это обеспечит заполнение контейнера без искажений */
        display: block;
    }

    .team-info {
        padding: 20px;
        text-align: center;
        flex-grow: 1; /* Это позволит информации занять оставшееся пространство */
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .team-name {
        color: #ffffff;
        font-size: 24px;
        margin-bottom: 10px;
    }

    .team-role {
        color: #ffffff;
        font-size: 18px;
    }

    .story-container {
        width: calc(100% - 333px);
        max-width: 1110px;
        background-color: #0E0E0E;
        margin: 0 auto 20px auto;
        padding: 40px;
        box-sizing: border-box;
    }

    .story-text {
        color: #ffffff;
        font-size: 18px;
        line-height: 1.6;
        text-align: center;
    }

    .cta-container {
        width: calc(100% - 733px); /* Уменьшаем ширину контейнера */
        max-width: 1110px;
        background-color: #0E0E0E;
        margin: 40px auto;
        padding: 40px;
        box-sizing: border-box;
        text-align: center;
        border-radius: 10px;
    }

    .cta-text {
        color: #ffffff;
        font-size: 18px;
        line-height: 1.6;
        margin-bottom: 20px;
    }

    .cta-buttons {
        display: flex;
        justify-content: center;
        gap: 20px;
    }

    .cta-button {
        display: inline-block;
        width: 200px; /* Фиксированная ширина для кнопок */
        padding: 10px 0; /* Убираем горизонтальные отступы */
        background-color: #333333;
        color: #ffffff;
        text-decoration: none;
        border-radius: 5px;
        transition: background-color 0.3s ease;
        text-align: center; /* Центрируем текст внутри кнопки */
    }

    .cta-button:hover {
        background-color: #555555;
    }
</style>
@endsection
