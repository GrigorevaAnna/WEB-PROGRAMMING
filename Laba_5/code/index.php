<?php
/* Подключение к серверу MySQL */
$mysqli = new mysqli('db', 'root', 'helloworld', 'web');

if (mysqli_connect_errno()) {
    printf("Подключение к серверу MySQL невозможно. Код ошибки: %s\n", mysqli_connect_error());
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $mysqli->real_escape_string($_POST['email']);
    $title = $mysqli->real_escape_string($_POST['title']);
    $category = $mysqli->real_escape_string($_POST['categories']);
    $description = $mysqli->real_escape_string($_POST['text']);

    $mysqli->query("INSERT INTO ad (email, title, description, category) VALUES ('$email', '$title', '$description', '$category')");
}

$ads = [];
if ($result = $mysqli->query('SELECT * FROM ad ORDER BY created DESC')) {
    while ($row = $result->fetch_assoc()) {
        $ads[] = $row;
    }
    $result->close();
}
$mysqli->close();
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Объявления</title>
</head>
<body>
<h1>The table</h1>

<form action="index.php" method="POST">
    <label for="email">Почта</label>
    <input type="email" name="email" required>

    <label for="title">Название</label>
    <input type="text" name="title" required>

    <label for="categories">Категория</label>
    <select name="categories" required>
        <option value="cars">Машины</option>
        <option value="books">Книги</option>
        <option value="sweets">Сладости</option>
    </select><br>

    <label for="description">Описание:</label><br>
    <textarea name="text" rows="10" cols="54" required></textarea><br>

    <button type="submit">Отправить</button>
</form>

<table>
    <tr>
        <th>Email</th>
        <th>Категории</th>
        <th>Заголовок</th>
        <th>Текст</th>
    </tr>
    <?php foreach ($ads as $ad):
        echo "<tr>";
        echo "<td>" . ($ad['email']) . "</td>";
        echo "<td>" . ($ad['category']) . "</td>";
        echo "<td>" . ($ad['title']) . "</td>";
        echo "<td>" . ($ad['description']) . "</td>";
        echo "</tr>";
    endforeach; ?>
</table>
</body>
</html>
