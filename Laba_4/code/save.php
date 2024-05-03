<?php
require_once 'vendor/autoload.php';

$client = new Google_Client();
$client->setAuthConfig(__DIR__.'/credentials.json');
$client->addScope(Google_Service_Sheets::SPREADSHEETS);

$service = new Google_Service_Sheets($client);

$spreadsheetId = '1chZy_qQ4PDAmxNpDHyqNcGb0kccKXxAr378czZyi4rc';
?>
