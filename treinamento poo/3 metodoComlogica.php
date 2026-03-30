<?php
class Funcionario {
    public $nome;
    public $salario;

    public function __construct($nome, $salario) {
        $this->nome = $nome;
        $this->salario = $salario;
    }

    public function aumentarSalario() {
        $this->salario = $this->salario * 1.10;
    }
}

// PRIMEIRO cria o objeto
$funcionario1 = new Funcionario("João", 2000);

// DEPOIS usa
echo "Salário antes: R$ " . $funcionario1->salario . "\n";

$funcionario1->aumentarSalario();

echo "Salário depois: R$ " . $funcionario1->salario . "\n";
?>