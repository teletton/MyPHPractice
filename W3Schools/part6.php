<?php
$x = 5;
$y = 10;

function Sum() {
    $GLOBALS['y'] = $GLOBALS['y'] + $GLOBALS['x'];
    return $GLOBALS['y'];
}

echo Sum() . "\n";
echo $GLOBALS['y'] . "\n";
?>