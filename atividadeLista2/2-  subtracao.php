<?php
echo "seja bem vindo a subtração de 2 números:".PHP_EOL;

echo"Digite seu primeiro numero:".PHP_EOL;
$numero1 = fgets(STDIN);

echo "Digite seu segundo numero:".PHP_EOL;
$numero2 = fgets(STDIN);

$subtracao = $numero1-$numero2;
echo "a subtração do numero$numero1-$numero2 é: $subtracao".PHP_EOL;