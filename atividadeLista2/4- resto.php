<?php
echo "seja bem vindo ao resto da divisão".PHP_EOL;

echo "digite seu primeiro numero:".PHP_EOL;
$numero1 = fgets(STDIN);

echo "digite seu segundo numero:".PHP_EOL;
$numero2 = fgets(STDIN);

$resto = $numero1 % $numero2;
echo" o resto do numero $numero1% $numero2 é: $resto".PHP_EOL;