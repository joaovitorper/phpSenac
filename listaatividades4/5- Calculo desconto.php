<?php
$valororiginal;
$percentual;
$valorFinal;
$desconto;

echo "Digite o valor da compra: ";
$valororiginal = fgets(STDIN);


if ($valororiginal >= 100) {
    $percentual = 20;
} else {
    $percentual = 10;
}

$desconto = $valororiginal * ($percentual / 100);
$valorFinal = $valororiginal - $desconto;


echo "Valor original: " . $valororiginal;
echo "Percentual de desconto: " . $percentual . "%\n";
echo "Valor final: " . $valorFinal;
?>