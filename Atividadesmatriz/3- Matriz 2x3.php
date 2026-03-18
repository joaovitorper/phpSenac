<?php

$matriz = [
    [1, 2, 3],
    [4, 5, 6]
];
 
$soma = 0;
 
foreach ($matriz as $linha) {
    foreach ($linha as $valor) {
        $soma += $valor;
    }
}
 echo "Soma total: " . $soma;
?>