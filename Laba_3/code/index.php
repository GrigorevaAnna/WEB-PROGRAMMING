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

