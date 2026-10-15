<?php
function printHeader()
{
    echo "<h3>SID:C113181107</h3>";
    echo "<h3>Name:顏于萱</h3>";
    echo "<h3>EX04</h3>";
}

printHeader();

$test = 15;
var_dump($test);
unset($test);
var_dump($test);