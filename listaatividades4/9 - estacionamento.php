<?php
echo "Digite o tipo de veículo (carro, moto, caminhao): ";
$tipo = trim(fgets(STDIN));

echo "Digite as horas estacionadas: ";
$horas = trim(fgets(STDIN));

switch ($tipo) {
    case "carro":
        $valor = $horas * 5;
        break;

    case "moto":
        $valor = $horas * 3;
        break;

    case "caminhao":
        $valor = $horas * 10;
        break;

    default:
        echo "Tipo de veículo inválido";
        exit;
}

if ($horas > 5) {
    $valor = $valor * 0.9;
}

echo "Valor a pagar: R$ $valor";
?>