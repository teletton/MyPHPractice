<?php
$x = 5;
$y = 10;

function Sum() {
    global $x, $y;

    $y = $x + $y;
    return $y;
}

echo Sum() . "\n";
echo $y . "\n";
?>