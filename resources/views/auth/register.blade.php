<h2>Регистрация</h2>
<form action="{{ route('register') }}" method="POST">
    @csrf
    <div>
        <label for="register-name">Имя:</label>
        <input type="text" id="register-name" name="name" required autocomplete="name">
    </div>
    <div>
        <label for="register-email">Email:</label>
        <input type="email" id="register-email" name="email" required autocomplete="email">
    </div>
    <div>
        <label for="register-password">Пароль:</label>
        <input type="password" id="register-password" name="password" required autocomplete="new-password">
    </div>
    <div>
        <label for="register-password-confirmation">Подтверждение пароля:</label>
        <input type="password" id="register-password-confirmation" name="password_confirmation" required autocomplete="new-password">
    </div>
    <button type="submit">Зарегистрироваться</button>
</form>
