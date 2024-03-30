<?php
if ('POST' === $_SERVER['REQUEST_METHOD'])
{
    if (isset($_POST['text']))
    {
        $text = $_POST['text'];
        $textNonspace = str_replace(array(" "), '', $text);
        $CountOfCharacters = mb_strlen($text, 'utf-8');
        $CountWithoutSpaces = mb_strlen($textNonspace, 'utf-8');
        if (!empty($text))
        {
            $words = preg_split('/\s+/', $text);
            $CountOfWords = count($words);
        }
        echo "Количество символов с пробелами: {$CountOfCharacters}";
        echo "<br/>";
        echo "Количество символов без пробелов: {$CountWithoutSpaces}";
        echo "<br/>";
        echo "Количество слов в тексте: {$CountOfWords}";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form. Sessions and cookies</title>
</head>
<body>
<form name="text-form" method="post">
    <textarea name="text" cols="40" rows="6"></textarea>
    <br/>
    <input type="submit" value="Подсчёт"/>
</form>
</body>
</html>
