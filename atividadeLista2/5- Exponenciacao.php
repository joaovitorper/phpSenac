<?php
echo "Seja bem-vindo ao cálculo da área do quadrado!".PHP_EOL;

echo "Digite o valor do lado: ".PHP_EOL;
$lado = fgets(STDIN);

$area = $lado ** 2;

echo "A área do quadrado de lado $lado é: $area".PHP_EOL;
?>