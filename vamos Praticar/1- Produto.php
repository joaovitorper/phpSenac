<?php

class Produto{

public $nome;
public $preco;
public $quantidade;

function exibirDados(){
    echo "Produto:" .$this ->nome ."\n";
     echo "Preço:" .$this ->preco ."\n";
      echo "Quantidade:" .$this ->quantidade."\n";
}

public function CalcularValorTotal() {
    return $this ->preco* $this ->quantidade;
    
}

}

$produto1 = new Produto();
$produto1 ->nome = "teclado";
$produto1 ->preco = 100;
$produto1 ->quantidade = 3;

$produto1 ->ExibirDados();

$total =$produto1 -> calcularValorTotal();
echo "Valor Total em total em estoque: ".$total . "\n";
echo"--------\n";


$produto2 = new Produto();
$produto2 ->nome = "Monitor";
$produto2 ->preco = 250;
$produto2 ->quantidade = 8;



$produto2 ->ExibirDados();


$total =$produto2 -> calcularValorTotal();

echo "Valor Total em total em estoque: ".$total . "\n";

?>


