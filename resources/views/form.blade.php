    <!doctype html>
    <html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/app.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
        <title>Document</title>
    </head>
    <body>
    <div class="col-6 container pt-3">
        <div>
            <form name="form" action="{{ Route ('books-name') }}" method="post">
                @csrf
                <div class="form-group mb-2">
                    <label for="title">Название книги:</label>
                    <input type="text" class="form-control" id="title" name="title">
                </div>
                <div class="form-group mb-2">
                    <label for="author">Имя автора:</label>
                    <input type="text" class="form-control" id="author" name="author">
                </div>
                <div class="form-group mb-3">
                    <label for="genre">Жанр:</label>
                    <select class="form-control" id="genre" name="genre">
                        <option value="Фантастика">Фантастика</option>
                        <option value="Детектив">Детектив</option>
                        <option value="Роман">Роман</option>
                        <option value="Поэзия">Поэзия</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Добавить книгу</button>
            </form>
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

