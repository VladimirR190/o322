<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
        @csrf
        <input type="text" name="name" placeholder="Имя" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Пароль" required>
        <input type="password" name="password_confirmation" placeholder="Подтвердите пароль" required><br> <!-- Поле для подтверждения пароля -->
        <input type="file" id="userphoto" name="userphoto"><br><br>
        <button type="submit">Зарегистрироваться</button>
    </form>
</body>

</html>