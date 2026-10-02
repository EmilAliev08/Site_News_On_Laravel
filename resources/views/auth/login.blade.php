<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Вход</title>
</head>
<body>
    <h1>Вход</h1>

    <form method="POST" action="/login">
        @csrf

        <div>
            <label>Email</label>
            <input type="email" name="email">
        </div>

        <div>
            <label>Пароль</label>
            <input type="password" name="password">
        </div>

        <button type="submit">Войти</button>
    </form>
</body>
</html>