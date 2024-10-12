<h2>Вход</h2>
<form id="loginForm" action="{{ route('login') }}" method="POST">
    @csrf
    <input type="email" name="email" required placeholder="Email">
    <input type="password" name="password" required placeholder="Пароль">
    <button type="submit">Войти</button>
</form>
<p>Нет аккаунта? <a href="#" id="showRegisterBtn">Зарегистрироваться</a></p>
