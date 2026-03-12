<?php

echo "==== TABUADAS DE 1 A 5 =====\n";

$i = 1;

while ($i <= 5) {
    echo "\nTabuada do $i:\n";

    $j = 1;

    while ($j <= 10) {
        $resultado = $i * $j;
        echo "$i x $j = $resultado\n";
        $j++;
    }

    $i++;
}

?>