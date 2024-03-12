<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Logs</title>
</head>
<body>
<h1>Logs</h1>

<table class="table table-striped">
    <thead>
    <tr>
        <th>Time</th>
        <th>Duration</th>
        <th>IP</th>
        <th>URL</th>
        <th>Method</th>
        <th>Input</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($logs as $log)
        <tr>
            <td>{{ $log->time }}</td>
            <td>{{ $log->duration }}</td>
            <td>{{ $log->ip }}</td>
            <td>{{ $log->url }}</td>
            <td>{{ $log->method }}</td>
            <td>{{ $log->input }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
