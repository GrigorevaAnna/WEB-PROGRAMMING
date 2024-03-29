<?php
/*--------Regular expressions_a--------*/
$text = 'ahb acb aeb aeeb adcb axeb';
$regexp = "/a[a-z][a-z]b/ui";
$result = preg_match_all($regexp, $text, $matches);
echo "Найдено слов: {$result}\n";
foreach($matches[0] as $word)
{
    echo $word;
    echo "\n";
}
/*--------Regular expressions_b--------*/
$text = 'a1b2c3';
$regexp = '/[0-9]/u';
function degree($matches)
{
    return pow($matches[0], 3);
}
$result = preg_replace_callback($regexp, 'degree', $text);
echo "Результат: {$result}\n";

