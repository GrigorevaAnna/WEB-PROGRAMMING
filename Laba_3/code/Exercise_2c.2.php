<?php
session_start();
echo "<ul>";
if (isset($_SESSION['data']))
{
    echo "<ul>";
    foreach ($_SESSION['data'] as $key => $value)
    {
        echo "<li>$key: $value</li>";
    }
    echo "</ul>";
}
echo "<ul>";
?>
