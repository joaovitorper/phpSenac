<?php
echo "Escolha uma operação:\n";
echo "1 - Somar\n";
echo "2 - Subtrair\n";
echo "3 - Multiplicar\n";
echo "4 - Dividir\n";

echo "Digite a opção desejada: ";
$opcao = fgets(STDIN);

echo "Digite o primeiro número: ";
$num1 = fgets(STDIN);

echo "Digite o segundo número: ";
$num2 = fgets(STDIN);

$num1 = (float)str_replace(',', '.', $num1);
$num2 = (float)str_replace(',', '.', $num2);

switch ($opcao) {
    case "1":
        echo "Resultado da soma: " . ($num1 + $num2) . "\n";
        break;
    case "2":
        echo "Resultado da subtração: " . ($num1 - $num2) . "\n";
        break;
    case "3":
        echo "Resultado da multiplicação: " . ($num1 * $num2) . "\n";
        break;
    case "4":
        if ($num2 == 0) {
            echo "Erro: Divisão por zero não é permitida.\n";
        } else {
            echo "Resultado da divisão: " . ($num1 / $num2) . "\n";
        }
        break;
    default:
        echo "Opção inválida.\n";
        break;
}