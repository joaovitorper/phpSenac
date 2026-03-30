<?php
class Produto {
    public $nome;
    public $preco;

    public function __construct($nome, $preco) {
        $this->nome = $nome;
        $this->preco = $preco;
    }

    public function exibirProduto() {
        echo "Nome: " . $this->nome . "\n";
        echo "Preço: R$ " . $this->preco . "\n";
    }
}


$produto1 = new Produto("Feijão", 8.90);
$produto1->exibirProduto();
?>