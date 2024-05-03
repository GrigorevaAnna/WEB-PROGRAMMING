<?php
require_once 'vendor/autoload.php';

$client = new Google_Client();
$client->setAuthConfig(__DIR__.'/credentials.json');
$client->addScope(Google_Service_Sheets::SPREADSHEETS);

$service = new Google_Service_Sheets($client);

$spreadsheetId = '1chZy_qQ4PDAmxNpDHyqNcGb0kccKXxAr378czZyi4rc';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $category = $_POST['category'];
    $title = $_POST['title'];
    $description = $_POST['description'];

    $row = [$email, $category, $title, $description];

    $range = 'Лист1!A1';
    $valueRange = new Google_Service_Sheets_ValueRange(['values' => [$row]]);
    $service->spreadsheets_values->append($spreadsheetId, $range, $valueRange, ['valueInputOption' => 'USER_ENTERED']);

    header('Location: index.php');
    exit();
}
?>
