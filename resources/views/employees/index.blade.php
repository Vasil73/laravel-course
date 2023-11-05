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
        <h1 class="h1 text-muted">Данные работников</h1>
        <table class="table table-dark">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Имя</th>
                <th scope="col">Фамилия</th>
                <th scope="col">Эл.почта</th>
                <th scope="col">Должность</th>
                <th scope="col">Адрес</th>
                <th scope="col">Действия</th>
            </tr>
            </thead>
            <tbody>
            @foreach($employees as $employee)
                <tr>
                    <th scope="row"></th>
                    <td>{{ $employee->name }}</td>
                    <td>{{ $employee->surname }}</td>
                    <td>{{ $employee->email }}</td>
                    <td>{{ $employee->position }}</td>
                    <td>{{ $employee->address }}</td>
                    <td>
                            <div class="">
                                <a class="text-decoration-none link-info"
                                   href="{{ route ('index.edit', $employee->id) }}">
                                    Редактировать</a>
                            </div>
                    </td>
                </tr>
            @endforeach.
            </tbody>
        </table>
        <div class=""><a class="btn btn-success" href="/employees/create">Добавить работника</a></div>
    </div>
    </body>
    </html>
