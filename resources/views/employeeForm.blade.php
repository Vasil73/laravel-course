<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Employee Form</title>
</head>
<body>
<form method="post" action="/employee">
    @csrf
    <input type="text" name="firstName" placeholder="Имя работника" required>
    <input type="text" name="lastName" placeholder="Фамилия работника" required>
    <input type="text" name="position" placeholder="Занимаемая должность" required>
    <input type="text" name="address" placeholder="Адрес проживания" required>
    <textarea name="jsonField" required></textarea>
    <button type="submit">Отправить</button>
</form>
</body>
</html>
