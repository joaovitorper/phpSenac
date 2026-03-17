<?php
$T1;
$T2;
$T3;

echo "Digite o tempo do nadador 1: ";
$T1 = fgets(STDIN);

echo "Digite o tempo do nadador 2: ";
$T2 = fgets(STDIN);

echo "Digite o tempo do nadador 3: ";
$T3 = fgets(STDIN);


// Comparações diretas para definir ouro, prata e bronze

if ($T1 < $T2 && $T1 < $T3) {
    echo "1\n"; // ouro
    if ($T2 < $T3) {
        echo "2\n"; // prata
        echo "3\n"; // bronze
    } else {
        echo "3\n"; // prata
        echo "2\n"; // bronze
    }
} elseif ($T2 < $T1 && $T2 < $T3) {
    echo "2\n"; // ouro
    if ($T1 < $T3) {
        echo "1\n"; // prata
        echo "3\n"; // bronze
    } else {
        echo "3\n"; // prata
        echo "1\n"; // bronze
    }
} else { // $T3 é o menor
    echo "3\n"; // ouro
    if ($T1 < $T2) {
        echo "1\n"; // prata
        echo "2\n"; // bronze
    } else {
        echo "2\n"; // prata
        echo "1\n"; // bronze
    }
}









?>