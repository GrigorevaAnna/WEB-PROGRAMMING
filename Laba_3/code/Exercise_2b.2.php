<?php
session_start();
if (isset($_SESSION['surname'], $_SESSION['name'], $_SESSION['age']))
{
    echo "Фамилия: ". $_SESSION['surname'];
    echo "<br />";
    echo "Имя: ". $_SESSION['name'];
    echo "<br />";
    echo "Возраст: ". $_SESSION['age'];
    echo "<br />";
}
?>
