<!DOCTYPE html>
<html>

<head>
    <title>Dashboard</title>
</head>

<body>
    <h1>Dashboard</h1>
    <form action="{{ route('logout') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @if(auth()->check())
       <h1>Добро пожаловать, {{ $user->name }}</h1>
       <img src="{{ asset('public/' . $user->UserPhoto) }}" alt="User Photo">
       <img src="{{ asset('public/' . $) }}" alt="User Photo">
       <img src="{{ asset('photos/default.jpg') }}" alt="Описание изображения">
       <button type="sumbit">Выйти</button> 
   @else
       <h1>Добро пожаловать, гость</h1>
   @endif
    </form>

</body>

</html>