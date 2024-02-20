<!DOCTYPE html>
<html>

<head>
    <title>Dashboard</title>
</head>

<body>
    <h1>Dashboard</h1>
    <form action="{{ route('logout') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @if(session('user_name'))
        <p>Привет, {{ session('user_name') }}</p>
        @endif

        @if(session('user_photo'))
        <img width="100px" height="100px" src="{{ asset('storage/app/photos/default.jpg') }}" alt="Фото профиля">
        @endif

        <img src="{{ asset('public/default.jpg') }}" alt="Описание изображения">
        <button type="submit">Выйти</button>
    </form>

</body>

</html>