    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link rel="stylesheet" href="public/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    </head>
    <body>
    <div class="container">
        <h1 class="h1 text-muted">Изменить данные работника</h1>

        <form class="px-4" method="POST" action=""
              enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div>
                <label for="name">Имя:</label>
                <input type="text" id="name" name="name" class="mb-3 px-4 form-control"
                       value="{{ $employee->name }}" required = "true">

                @error('name')
                <div class="text-danger">{{ $message }}</div>
                @enderror

            </div>
            <div>
                <label for="surname">Фамилия:</label>
                <input type="text" id="surname" name="surname" class="mb-3 px-4 form-control"
                       value="{{ $employee->surname }}" required = "true">
            </div>
            <div>
                <label for="email">Эл.почта:</label>
                <input type="email" id="email" name="email" class="mb-3 px-4 form-control"
                       value="{{ $employee->email }}" required = "true">
            </div>
            <div>
                <label for="position">Должность:</label>
                <input type="text" id="position" name="position" class="mb-3 px-4 form-control"
                       value="{{ $employee->position }}" required = "true">
            </div>
            <div>
                <label for="address">Адрес:</label>
                <input type="text" id="address" name="address" class="mb-3 px-4 form-control"
                       value="{{ $employee->address }}" required = "true">
            </div>
            <div>
                <label for="json_data">Данные Json:</label>
                <textarea type="text" id="json_data" name="json_data"
                          class="mb-3 px-4 form-control" required = "true">{{ $employee->json_data }}</textarea>
            </div>
            <div class="mt-4">
                <button class="btn btn-primary" type="submit">Отправить</button>
            </div>
        </form>
    </div>
    </body>
    </html>
