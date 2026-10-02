<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Регистрация</title>
</head>

<body>

    <h1>Регистрация</h1>

    <form method="POST" action="/register">

        @csrf

        <div>
            <label>Имя</label>
            <input type="text" name="name">
        </div>

        <div>
            <label>Email</label>
            <input type="email" name="email">
        </div>

        <div>
            <label>Пароль</label>
            <input type="password" name="password">
        </div>

        <div>
            <label>Подтверждение пароля</label>
            <input type="password" name="password_confirmation">
        </div>

        <button type="submit">Зарегистрироваться</button>

    </form>

</body>
</html>