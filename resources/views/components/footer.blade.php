<footer class="site-footer">
    <div class="footer-content">
        <div class="footer-logo">
            <img src="{{ asset('images/chaos-mask-logo.png') }}" alt="Chaos Mask Logo">
        </div>
        <div class="footer-columns">
            <div class="footer-nav">
                <h3>NAVIGATION</h3>
                <ul>
                    <li><a href="{{ route('home') }}">Home page</a></li>
                    <li><a href="{{ route('catalog') }}">Catalog</a></li>
                    <li><a href="{{ route('about') }}">About us</a></li>
                    <li><a href="{{ route('blog') }}">Blog</a></li>
                    <li><a href="{{ route('contact') }}">Contacts</a></li>
                </ul>
            </div>
            <div class="footer-nav">
                <h3>НАВИГАЦИЯ</h3>
                <ul>
                    <li><a href="{{ route('home') }}">Главная страница</a></li>
                    <li><a href="{{ route('catalog') }}">Каталог</a></li>
                    <li><a href="{{ route('about') }}">О нас</a></li>
                    <li><a href="{{ route('blog') }}">Блог</a></li>
                    <li><a href="{{ route('contact') }}">Контакты</a></li>
                </ul>
            </div>
            <div class="footer-contact">
                <h3>CONTACT US</h3>
                <p>chaosMask@gmail.com</p>
                <p>+7 777 777 77 77</p>
                <div class="social-links">
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                    <a href="#"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>

<style>
.site-footer {
    background-color: #000;
    color: #fff;
    padding: 20px 0;
    font-family: Arial, sans-serif;
    position: relative;
    z-index: 9999;
    width: 100vw; /* Устанавливаем ширину на 100% ширины viewport */
    margin-left: calc(-50vw + 50%); /* Центрируем футер */
    box-sizing: border-box; /* Учитываем padding в общей ширине */
}

.footer-content {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
    box-sizing: border-box; /* Учитываем padding в общей ширине */
}

.footer-logo {
    margin-right: 100px; /* Увеличиваем отступ между логотипом и остальными элементами */
    margin-left: 20px;
}

.footer-logo img {
    width: 150px;
    height: auto;
}

.footer-columns {
    display: flex;
    justify-content: space-between;
    flex-grow: 1;
}

.footer-nav, .footer-contact {
    flex: 1;
    margin-right: 20px; /* Отступ между колонками */
}

.footer-nav:last-child, .footer-contact {
    margin-right: 50px; /* Убираем отступ у последнего элемента */
}

.footer-nav h3, .footer-contact h3 {
    font-size: 14px;
    margin-bottom: 10px;
    font-weight: bold;
}

.footer-nav ul {
    list-style-type: none;
    padding: 0;
}

.footer-nav ul li {
    margin-bottom: 5px;
}

.footer-nav ul li a {
    color: #fff;
    text-decoration: none;
    font-size: 14px;
}

.footer-contact p {
    margin: 5px 0;
    font-size: 14px;
}

.social-links {
    margin-top: 10px;
}

.social-links a {
    color: #fff;
    font-size: 18px;
    margin-right: 10px;
}
</style>
