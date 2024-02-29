<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="container">
            <div class="row col-4">
                <h1 class="col-4 mb-2">Войти</h1>
            </div>
            <div class="row col-4">

                <input class="form-control mb-2" type="email" name="email" placeholder="Email" required>
            </div>
            <div class="row col-4">

                <input class="form-control mb-2" type="password" name="password" placeholder="Пароль" required>
            </div>
            <div class="row col-4">

                <button class="col-2 mb-2 btn btn-primary" type="submit">Войти</button>
            </div>
        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>