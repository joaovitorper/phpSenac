<?php
class Produto{
    public $nome;
    public $preco;
    public $quantidade;

      public function __construct($nome, $preco, $quantidade) {
        $this->nome = $nome;
        $this->preco = $preco;
        $this->quantidade = $quantidade;
    }

    public function calcularValorTotal() {
        return $this->preco * $this->quantidade;
    }

    public function exibirDados() {
        echo "Nome: " . $this->nome . PHP_EOL;
        echo "Preço: " . $this->preco . PHP_EOL;
        echo "Quantidade: " . $this->quantidade . PHP_EOL;
        echo "Valor Total: " . $this->calcularValorTotal() . PHP_EOL;
        echo "-------------------------" . PHP_EOL;
    }
}


$produtos = [];

do {
    echo "\n=== MENU ===\n";
    echo "1. Adicionar produto\n";
    echo "2. Listar produtos\n";
    echo "3. Sair\n";
    echo "Escolha uma opção: ";
    $opcao = intval(trim(fgets(STDIN)));

    switch ($opcao) {
        case 1:
            echo "\n=== Adicionar Produto ===\n";
            echo " Digite o Nome: ";
            $nome = trim(fgets(STDIN));

            echo "Digite o Preço: ";
            $preco = floatval(trim(fgets(STDIN)));

            echo " Digite a Quantidade: ";
            $quantidade = intval(trim(fgets(STDIN)));

            $produto = new Produto($nome, $preco, $quantidade);
            $produtos[] = $produto;

            echo "Produto adicionado com sucesso!\n";
            break;

        case 2:
            if (empty($produtos)) {
                echo "Nenhum produto cadastrado.\n";
            } else {
                foreach ($produtos as $produto) {
                    $produto->exibirDados();
                }
            }
            break;

        case 3:
            echo "Saindo...\n";
            break;

        default:
            echo "Opção inválida!\n";
    }
} while ($opcao != 3);