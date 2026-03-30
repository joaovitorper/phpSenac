<?php
// Definindo a classe Produto
class Produto {
    public $nome;
    public $preco;

    public function __construct($nome, $preco) {
        $this->nome = $nome;
        $this->preco = $preco;
    }

    
    public function mostrarInfo() {
        echo "Nome: " . $this->nome . "\n";
        echo "Preço: R$ " . $this->preco . "\n";
    }
}


$produto1 = new Produto("Feijão", 8.90);
$produto2 = new Produto("Lasanha", 13.90);

$produto1->mostrarInfo();
$produto2->mostrarInfo();

?>