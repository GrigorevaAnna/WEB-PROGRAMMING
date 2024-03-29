<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data entry</title>
</head>
<body>
<form method="post">

    <label for="name">Имя:</label>
    <input type="text" name="name" id="name" required><br/>

    <label for="age">Возраст:</label>
    <input type="number" name="age" id="age" required><br/>

    <label for="salary">Зарплата:</label>
    <input type="number" name="salary" id="salary" required><br/>

    <label for="book">Любимая книга:</label>
    <input type="text" name="book" id="book" required><br/>

    <button type="submit">Сохранить</button>
</form>
</body>
</html>
