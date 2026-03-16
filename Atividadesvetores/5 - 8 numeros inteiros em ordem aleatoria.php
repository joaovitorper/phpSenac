<?php

$vetor = [13, 21, 51, 81, 100, 99, 36, 73];


echo "Vetor original:\n";
foreach ($vetor as $n) {
    echo $n . " ";
}


sort($vetor);


echo "\n\nVetor ordenado:\n";
foreach ($vetor as $n) {
    echo $n . " ";
}

?>