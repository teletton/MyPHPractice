<?php
function Inc() {
    static $x = 0;
    echo $x . "\n";
    $x++;
}

Inc();
Inc();
Inc();
?>