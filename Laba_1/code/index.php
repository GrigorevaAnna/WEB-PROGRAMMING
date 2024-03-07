<?php
/* Imagine a lot of code here */
$very_bad_unclear_name = "15 chicken wings";


// Write your code here:
$order = &$very_bad_unclear_name;
$order .= " and the same number of legs";

// Don't change the line below

echo "\nYour order is: $very_bad_unclear_name.";

/*-------------------------------------*/
          /*Numbers*/

$first_number = 19;
echo "\n$first_number";

$second_number = 19.5;
echo $second_number;

echo "\n";
echo 19 - 7;

$last_month = 1187.23;
$this_month = 1089.98;
$difference = $last_month - $this_month;
echo "\n$difference";

/*-------------------------------------*/
     /*Multiplication and division*/

$num_languages = 4;
$months = 11;

$days = $months * 16;

$days_per_language = $days / $num_languages;
echo "\n$days_per_language";

/*-------------------------------------*/
               /*Degree*/

echo "\n";
echo 8 ** 2;

/*-------------------------------------*/
        /*Assignment operators*/

$my_num = 19;
$answer = $my_num;
$answer += 2;
$answer *= 2;
$answer -= 2;
$answer /= 2;
$answer -= $my_num;
echo "\n$answer";

/*-------------------------------------*/
      /*Mathematical functions*/

$a = 10;
$b = 3;
$c = $a % $b;
echo "\n$c";

/*-------------------------------------*/

$a = 20;
$b = 2;
if ($a % $b == 0) {
    echo "\nДелится";
}
else {
    echo "\nДелится с остатком";
}

/*-------------------------------------*/

$st = (pow(2, 10));
$sqrt = sqrt(245);
echo "\n$st";
echo "\n$sqrt";


$array = [4, 2, 5, 19, 13, 0, 10];
$sum = 0;
foreach ($array as $k) {
    $sum += $k ** 2;
}
$sqrt = sqrt($sum);
echo "\n$sqrt";

/*-------------------------------------*/

$sqrt = sqrt(379);
$integer = round($sqrt);
$tenth = round($sqrt, 1);
$hundredths = round($sqrt, 2);

echo "\n$integer";
echo "\n$tenth";
echo "\n$hundredths";

$sqrt = sqrt(587);
$array = ["floor" => floor($sqrt), "ceil" => ceil($sqrt)];

echo "\n{$array['floor']}";
echo "\n{$array['ceil']}";

/*-------------------------------------*/

$array = [4, -2, 5, 19, -130, 0, 10];
$min = min($array);
$max = max($array);

echo "\n$min";
echo "\n$max";

/*-------------------------------------*/

$random_num = rand(0, 100);
echo "\n$random_num";

$array = [];
for ($i = 0; $i < 10; $i ++) {
    $array = rand();
}
echo "\n$array";

/*-------------------------------------*/

$a = 4;
$b = 12;
$module = abs($a - $b);
echo "\n$module";

$array = [1, 2, -1, -2, 3, -3];
$array = array_map('abs', $array);
echo "\n[";
foreach($array as $k) echo "$k ";
echo "]";

/*-------------------------------------*/


$a = 40;
$array = [];
for ($i = 1; $i <= $a; $i ++) {
    if ($a % $i == 0) {
        array_push($array, $i);
    }
}
foreach($array as $k) echo "$k ";

$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$count = 0;
$sum = 0;
while ($sum <= 10) {
    $sum += $array[$count];
    $count += 1;
}

echo "\n$count";

/*-------------------------------------*/
