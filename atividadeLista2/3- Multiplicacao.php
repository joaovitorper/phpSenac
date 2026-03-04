<?php
echo"seja bem vindo ao mutiplicação:".PHP_EOL;

echo" digite seu primero numero:".PHP_EOL;
$numero1 = fgets(STDIN);

echo"Digite seu segundo numero:".PHP_EOL;
$numero2 =fgets(STDIN);

$multiplicacao = $numero1 * $numero2;
echo" A multiplicação do numero $numero1 x $numero2 é $multiplicacao".PHP_EOL;

$divisao = $numero1/$numero2;
echo" a divisão do numero $numero1/$numero2 é: $divisao".PHP_EOL;