@extends('layouts.main')
@section('content')
<form method="POST" action="{{ route('admin.admin') }}">
        @csrf
        <div class="container">
            <div class="row col-4">
                <h1 class="col-4 mb-2">Войти</h1>
            </div>
            <div class="row col-4">

                <input class="form-control mb-2" type="text" name="category_name" placeholder="Categories" required>
            </div>
            
            <div class="row col-4">

                <button class="col-6 mb-2 btn btn-primary" type="submit">Создать категорию</button>
            </div>
        </div>
    </form>
@endsection