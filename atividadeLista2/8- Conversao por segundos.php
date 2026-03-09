<?php
echo "Seja bem-vindo ao conversor de segundos!".PHP_EOL;

echo "Digite o total de segundos: ".PHP_EOL;
$segundos = fgets(STDIN);

$horas = intdiv($segundos, 3600);
$resto = $segundos % 3600;


$minutos = intdiv($resto, 60);
$segundosFinal = $resto % 60;

echo "Horas: $horas".PHP_EOL;
echo "Minutos: $minutos".PHP_EOL;
echo "Segundos: $segundosFinal".PHP_EOL;

echo "Formato hh:mm:ss = $horas:$minutos:$segundosFinal".PHP_EOL;
?>