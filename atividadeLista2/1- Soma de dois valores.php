<?php
echo "seja bem vindo a soma de 2 números:".PHP_EOL;

echo "Digite o seu primeiro numero:".PHP_EOL;
$numero1= fgets(STDIN);

echo "Digite o seu segundo numero:".PHP_EOL;
$numero2= fgets(STDIN);

$soma = $numero1+$numero2;

echo "a soma do numero$numero1+$numero2 é:$soma".PHP_EOL;