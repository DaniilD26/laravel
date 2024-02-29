<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <h2>Регистрация</h2>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div>
            <label for="name">Имя:</label><br>
            <input type="text" id="name" name="name">
        </div>

        <div>
            <label for="email">Email:</label><br>
            <input type="email" id="email" name="email">
        </div>

        <div>
            <label for="password">Пароль:</label><br>
            <input type="password" id="password" name="password">
        </div>

        <div>
            <label for="password_confirmation">Подтверждение пароля:</label><br>
            <input type="password" id="password_confirmation" name="password_confirmation">
        </div>

        <div>
            <button type="submit">Зарегистрироваться</button>
        </div>
    </form>
</body>
</html>
