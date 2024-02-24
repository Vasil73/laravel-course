<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/app.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
            crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<div class="container d-flex justify-content-between pt-3">
{{--    <ul style="list-style: none">--}}
{{--        <h4>Список пользователей</h4>--}}
{{--        @foreach($users as $user)--}}
{{--            <li>--}}
{{--                {{ $user->name }} {{ $user->surname }} - {{ $user->email }}--}}
{{--            </li>--}}

{{--        @endforeach--}}
{{--    </ul>--}}

    <div class="col-4">
        <div class="mb-3">
            <form name="form" action="{{ Route ('user-create') }}" method="post">
                @csrf
                <div class="form-group mb-2">
                    <label for="title">Имя</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="form-group mb-2">
                    <label for="author">Фамилия</label>
                    <input type="text" class="form-control" id="surname" name="surname">
                </div>
                <div class="form-group mb-2">
                    <label for="author">Эл.почта</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
                <button type="submit" class="btn btn-primary">Добавить пользователя</button>
            </form>
        </div>
            <div>
                <!-- Форма для удаления пользователя -->
                <form name="deleteForm" action="{{ route('user-delete', ['id' => $user->id]) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Удалить пользователя</button>
                </form>
            </div>
    </div>

    <div class="pt-4">
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $err)
                        <li>{{ $err }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if(session ('success'))
            <div class="row">
                <div class="col-6 alert alert-success">
                    {{ session ('success') }}
                </div>
            </div>

        @endif
    </div>
</div>
</body>
</html>

