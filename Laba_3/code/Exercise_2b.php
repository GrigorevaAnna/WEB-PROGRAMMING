<?php
session_start();

if ("POST" === $_SERVER["REQUEST_METHOD"])
{
    $surname = $_POST["surname"];
    $_SESSION['surname'] = $surname;

    $name = $_POST["name"];
    $_SESSION['name'] = $name;

    $age = $_POST["age"];
    $_SESSION['age'] = $age;

    header('Location: exercise_2b.php');
    exit();
}
?>

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
    <label for="surname">Фамилия:</label>
    <input type="text" name="surname" id="surname" required><br/>

    <label for="name">Имя:</label>
    <input type="text" name="name" id="name" required><br/>

    <label for="age">Возраст:</label>
    <input type="number" name="age" id="age" required><br/>

    <button type="submit">Сохранить</button>
</form>
</body>
</html>
