<?php
$idade;
$salario;
$valorDaParcela;

echo "Digite a sua idade: ";
$idade = fgets(STDIN);

echo "Digite o salario: ";
$salario = fgets(STDIN);

echo "Digite o valor da parcela: ";
$valorDaParcela = fgets(STDIN);

if ($idade >= 18 && $valorDaParcela <= ($salario * 0.30)) {
    echo "Empréstimo aprovado";
} else {
    echo "Empréstimo negado";
}