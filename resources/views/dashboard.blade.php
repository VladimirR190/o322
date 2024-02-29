<!DOCTYPE html>
<html>

<head>
    <title>Dashboard</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <form action="{{ route('logout') }}" method="POST" enctype="multipart/form-data">
        <div class="row">

            <h1 class="col-4 mb-4">Главная</h1>
        </div>
        @csrf
        @if(auth()->check())
        <div class="row">

            <div class="col-3 mb-4">

                <h1>Добро пожаловать, {{ $user->name }}</h1>
            </div>
            <div class="col-6 mb-4">
                <img class="rounded-circle" max-width="100px" src="{{ asset('storage/'. $user->UserPhoto) }}" alt="User Photo">
                <style>
                    img {
                        width: 100px;
                        height: 100px;
                    }
                </style>
            </div>

        </div>
       


        <div class="row">
            <button class="col-1 mb-4 btn btn-primary" type="sumbit">Выйти</button>
        </div>
        @else
        <div class="row">
            <h1 class="col-5 mb-4">Добро пожаловать, гость</h1>
        </div>
        @endif
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>