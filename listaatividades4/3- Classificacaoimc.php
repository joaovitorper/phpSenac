<?php
$peso;
$altura;
$imc;

echo "Digite seu peso: ";
$peso = fgets(STDIN);

echo "Digite sua altura: ";
$altura = fgets(STDIN);

$imc = $peso / ($altura * $altura);

echo "Seu IMC é: " . $imc . "\n";

if ($imc < 18.5) {
    echo "Classificação: Abaixo do peso";
} elseif ($imc <= 24.9) {
    echo "Classificação: Peso normal";
} elseif ($imc <= 29.9) {
    echo "Classificação: Sobrepeso";
} else {
    echo "Classificação: Obesidade";
}
?>