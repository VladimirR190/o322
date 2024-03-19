@extends('layouts.main')
@section('content')
    
    <form  method="POST" action="{{ route('auth.register') }}" enctype="multipart/form-data">
            <div class="container">
            @csrf
            <div class="row ">
                <h1 class=" ">Регистрация</h1>
            </div>
            <div class="row col-4">
               
                    <input class="form-control mb-2 " type="text" name="name" placeholder="Имя" required>

            </div>
            <div class="row col-4">

                <input class=" form-control col-md-4 mb-2" type="email" name="email" placeholder="Email" required>
            </div>
            <div class="row col-4">

                <input class="form-control col-4 mb-2" type="password" name="password" placeholder="Пароль" required>
            </div>
            <div class="row col-4">
 
                <input class="form-control col-4 mb-2" type="password" name="password_confirmation" placeholder="Подтвердите пароль" required> <!-- Поле для подтверждения пароля -->
            </div>
            <div class="row col-4">
                

                    <input class="form-control col-4" type="file" id="UserPhoto" name="UserPhoto"><br><br>
                
            </div>
            <div class="row">
                

                    <button class="col-2 btn btn-primary" type="submit">Зарегистрироваться</button>
                
            </div>
        </div>
        </form>
    
@endsection
