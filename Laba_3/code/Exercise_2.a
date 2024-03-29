<?php
if ('POST' === $_SERVER['REQUEST_METHOD'])
{
    if (isset($_POST['text']))
    {
        $text = $_POST['text'];
        $text_nonspace = str_replace(array(" "), '', $text);
        $Count_of_characters = mb_strlen($text, 'utf-8');
        $Count_without_spaces = mb_strlen($text_nonspace, 'utf-8');
        if (!empty($text))
        {
            $words = preg_split('/\s+/', $text);
            $Count_of_words = count($words);
        }
        echo "Количество символов с пробелами: {$Count_of_characters}";
        echo "<br/>";
        echo "Количество символов без пробелов: {$Count_without_spaces}";
        echo "<br/>";
        echo "Количество слов в тексте: {$Count_of_words}";
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
