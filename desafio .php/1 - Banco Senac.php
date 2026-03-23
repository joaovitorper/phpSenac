<?php
$nomeDoCliente = "João Vítor Pereira Paulo";
$saldo =5000;

echo "Receba as Boas Vindas ao banco Senac" . PHP_EOL;

do {
    echo "******************" . PHP_EOL;
    echo "1- Consultar Saldo" . PHP_EOL;
    echo "2- Sacar Valor" . PHP_EOL;
    echo "3- Depositar Valor" . PHP_EOL;
    echo "4- Sair" . PHP_EOL;
    echo "******************" . PHP_EOL;
    
    $opcao = trim(fgets(STDIN));

    echo "Voce escolheu: " . $opcao . PHP_EOL;

} while ($opcao != 4);

