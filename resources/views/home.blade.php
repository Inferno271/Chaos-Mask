<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chaos Mask</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

</head>

<body class="home-page">
    <div class="background"></div>
    <div class="main-container">    
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
    </div>  
    
</body>
</html>