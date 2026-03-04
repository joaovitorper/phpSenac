<?php
echo "Seja bem-vindo ao cálculo de desconto!".PHP_EOL;

echo "Digite o valor do produto: ".PHP_EOL;
$preco = fgets(STDIN);

echo "Digite o percentual de desconto: ".PHP_EOL;
$percentual = fgets(STDIN);

$desconto = $preco * ($percentual / 100);
$precoFinal = $preco - $desconto;

echo "O valor do desconto é: $desconto".PHP_EOL;
echo "O preço final com desconto é: $precoFinal".PHP_EOL;
?>