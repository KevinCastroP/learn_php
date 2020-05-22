<?php

$valores = [23, 54, 32, 67, 34, 78, 98, 56, 21, 34, 57, 92, 12, 5, 61];

for ($count = 0; $count < $valores; $count++) {
    if ($count == max($valores)){
        echo $count, "\n";
    } elseif ($count == min($valores)) {
        echo $count, "\n";
    }
}

?>