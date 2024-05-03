<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laba_4</title>
</head>
<body>
<div id="form">
    <form action="save.php" method="POST">
        <label for="email">Email</label>
        <input type="email" name="email" required>

        <label for="category">Category</label>
        <select name="category" required>
            <option value="books">Books</option>
            <option value="sweets">Sweets</option>
            <option value="cars">Cars</option>
        </select><br>
        <label for="title">Title:</label><br>
        <input type="text" id="title" name="title" required><br>

        <label for="description">Description:</label><br>
        <textarea rows="4" name="description" required></textarea><br>

        <button type="submit">Post</button>
    </form>
</div>

<div id="table">
    <table>
        <thead>
        <th>Email</th>
        <th>Category</th>
        <th>Title</th>
        <th>Description</th>
        </thead>
        <tbody>
        <?php
        require_once 'vendor/autoload.php';

        $client = new Google_Client();
        $client->setAuthConfig(__DIR__.'/credentials.json');
        $client->addScope(Google_Service_Sheets::SPREADSHEETS);

        $service = new Google_Service_Sheets($client);

        $spreadsheetId = '1chZy_qQ4PDAmxNpDHyqNcGb0kccKXxAr378czZyi4rc';

        $response = $service->spreadsheets_values->get($spreadsheetId, 'Лист1');
        $values = $response->getValues();

        if (!empty($values)) {
            foreach ($values as $row) {
                echo "<tr>";
                echo "<td>{$row[0]}</td>";
                echo "<td>{$row[1]}</td>";
                echo "<td>{$row[2]}</td>";
                echo "<td>{$row[3]}</td>";
                echo "</tr>";
            }
        }
        ?>
        </tbody>
    </table>
</div>
</body>
</html>
