<?php
$x = 5; // global scope
function myTest() {
    //$x = 4;
    global $x;
    echo "<p>Variable x inside function is: $x</p>";
}
myTest();

echo "<p>Variable x inside function is: $x</p>";
?>