<?php
require "about_me.php";
echo "W11 Ex01<br/>";
echo "<HR>";

$file = basename($_SERVER["PHP_SELF"], ".php");
$path = realpath($file . ".php");
echo "real path: $path <BR/>";

$part = pathinfo(($path));
echo "path: " . $part["dirname"] . "<BR/>";
echo "filename: ". $part["basename"] . "<BR/>";
echo "extension: ". $part["extension"] . "<BR/>";

