<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chaos Mask</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            overflow: hidden;
        }
        .background {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            background: 
                url('{{ asset('images/pattern.png') }}') repeat,
                linear-gradient(to bottom, rgba(0,0,0,1) 0%, rgba(0,0,0,0) 250%),
                url('{{ asset('images/smoke.png') }}') no-repeat center center;
            background-size: auto, auto, cover;
        }
        .gradient-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 10;
            background: linear-gradient(to bottom, rgba(24,24,24,0.9) 0%, rgba(14,14,14,0.5) 50%, rgba(0,0,0,0.2) 100%);
            pointer-events: none;
        }
        .new-gradient-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 20;
            background: linear-gradient(to bottom, rgba(36,36,36,0.1) 10%, rgba(36,36,36,0) 100%);
            pointer-events: none;
        }
        .content {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            padding: 0 20px;
            position: relative;
            z-index: 1;
        }
        .mask-container {
            position: relative;
            width: 100%;
            max-width: 1200px; /* Увеличиваем максимальную ширину контейнера */
            height: 95vh; /* Устанавливаем высоту в процентах от высоты viewport */
            margin: 0 auto;
            overflow: hidden; /* Скрываем части масок, выходящие за пределы контейнера */
        }
        .half-mask {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            width: 30%; /* Устанавливаем ширину в процентах */
            height: auto;
            animation: levitate 12s ease-in-out infinite;
        }
        .left-mask {
            left: 0; /* Сдвигаем левую маску влево */
            animation-delay: 0s;
        }
        .right-mask {
            right: 0; /* Сдвигаем правую маску вправо */
            animation-delay: 0.5s;
        }
        .logo-container {
            position: fixed;
            top: 20px; /* Поднимаем логотип выше */
            left: 50%;
            transform: translateX(-50%);
            z-index: 25; /* Размещаем поверх градиентов, но под сайдбаром */
            text-align: center;
        }
        .main-logo {
            width: 80px; /* Уменьшаем размер логотипа */
            height: auto;
        }
        h1 {
            font-size: 24px; /* Уменьшаем размер текста */
            color: #ffffff;
            margin-top: 5px;
        }
        .description {
            max-width: 600px;
            text-align: center;
            margin-top: 20px;
            color: #ffffff;
        }
        @keyframes levitate {
            0% {
                transform: translateY(-50%);
            }
            50% {
                transform: translateY(-53%);
            }
            100% {
                transform: translateY(-50%);
            }
        }
        .center-text {
            position: fixed !important;
            top: 40% !important;
            left: 50% !important;
            transform: translate(-50%, -50%) !important;
            z-index: 1000 !important; /* Очень высокий z-index */
            text-align: center !important;
            color: #ffffff !important;
            max-width: 400px !important;
            padding: 20px !important;
            background-color: rgba(0, 0, 0, 0.5) !important; /* Полупрозрачный фон */
            border-radius: 10px !important;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.5) !important;
        }
        .center-text h2 {
            font-size: 32px !important;
            margin-bottom: 15px !important;
            color: #ffffff !important;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 1) !important;
        }
        .center-text p {
            font-size: 16px !important;
            line-height: 1.4 !important;
            color: #ffffff !important;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 1) !important;
        }
    </style>
</head>
<body>
    <div class="background"></div>
    
    <div class="logo-container">
        <img src="{{ asset('images/chaos-mask-logo.png') }}" alt="Chaos Mask Logo" class="main-logo">
        <h1>CHAOS MASK</h1>
    </div>

    <div class="content">
        <div class="mask-container">
            <img src="{{ asset('images/halfmask1.png') }}" alt="Left half of the mask" class="half-mask left-mask">
            <img src="{{ asset('images/halfmask2.png') }}" alt="Right half of the mask" class="half-mask right-mask">
        </div>
        <div class="center-text-container" style="
            position: fixed;
            top: 40%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 9999;
            width: 100%;
            max-width: 400px;
            text-align: center;
        ">
        </div>
    </div>

    <div class="gradient-overlay"></div>
    <div class="new-gradient-overlay"></div>

    @include('components.sidebar')

    <div id="isolated-text" style="position: fixed; top: 0; left: 0; width: 100%; height: 100%; display: flex; justify-content: center; align-items: flex-start; padding-top: 15%; z-index: 10000; pointer-events: none;">
        <div style="max-width: 400px; text-align: center;">
            <h2 style="color: #fff !important; font-size: 32px !important; margin-bottom: 15px !important; text-shadow: 2px 2px 4px rgba(0,0,0,0.5) !important;">Добро пожаловать в мир Chaos Mask</h2>
            <p style="color: #fff !important; font-size: 16px !important; line-height: 1.4 !important; text-shadow: 1px 1px 2px rgba(0,0,0,0.5) !important;">Откройте для себя уникальные маски ручной работы, созданные для самовыражения и воплощения ваших самых смелых идей.</p>
        </div>
    </div>

</body>
</html>