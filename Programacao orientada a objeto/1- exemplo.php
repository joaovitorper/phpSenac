<?php

class Pessoa {

    public $nome;
    public $idade;

    public function __construct($nome, $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function apresentar() {
        return "Olá, meu nome é " . $this->nome . " e tenho " . $this->idade . " anos.";
    }
}

$pessoa1 = new Pessoa("João", 25);
$pessoa2 = new Pessoa("Amanda", 25);

echo $pessoa1->apresentar() . PHP_EOL;
echo $pessoa2->apresentar() . PHP_EOL;

?>