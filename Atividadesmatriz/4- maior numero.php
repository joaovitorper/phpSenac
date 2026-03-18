<?php

$matriz = [
    [3, 7, 2],
    [13, 5, 1],
    [4, 8, 6]
];

$maior = $matriz[0][0]; 

foreach ($matriz as $linha) {
    foreach ($linha as $valor) {
        if ($valor > $maior) {
            $maior = $valor;
        }
    }
}

echo "O maior número é: " . $maior;

?>