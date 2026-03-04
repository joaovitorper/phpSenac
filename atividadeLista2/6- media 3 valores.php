<?php
echo "Seja bem-vindo ao cálculo da média de 3 valores!".PHP_EOL;

echo "Digite o primeiro valor: ".PHP_EOL;
$valor1 = fgets(STDIN);

echo "Digite o segundo valor: ".PHP_EOL;
$valor2 = fgets(STDIN);

echo "Digite o terceiro valor: ".PHP_EOL;
$valor3 = fgets(STDIN);

$media = ($valor1 + $valor2 + $valor3) / 3;

echo "A média dos valores $valor1, $valor2 e $valor3 é: $media".PHP_EOL;
?>