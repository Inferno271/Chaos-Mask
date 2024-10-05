<h2>Авторизация</h2>
<form action="{{ route('login') }}" method="POST">
    @csrf
    <div>
        <label for="login-email">Email:</label>
        <input type="email" id="login-email" name="email" required autocomplete="email">
    </div>
    <div>
        <label for="login-password">Пароль:</label>
        <input type="password" id="login-password" name="password" required autocomplete="current-password">
    </div>
    <button type="submit">Войти</button>
</form>
