<?php

class Aluno {
    public $nome;
    public $nota1;
    public $nota2;

    public function calcularMedia() {
        return ($this->nota1 + $this->nota2) / 2;
    }

    public function verificarSituacao() {
        $media = $this->calcularMedia();

        if ($media >= 7) {
            return "APROVADO";
        } else {
            return "REPROVADO";
        }
    }

    public function exibirDados() {
        echo "Aluno: " . $this->nome . "\n";
        echo "Nota 1: " . $this->nota1 . "\n";
        echo "Nota 2: " . $this->nota2 . "\n";
        echo "Média: " . $this->calcularMedia() . "\n";
        echo "Situação: " . $this->verificarSituacao() . "\n";
    }
}

$aluno1 = new Aluno();

echo "Digite o nome do aluno: ";
$aluno1->nome = trim(fgets(STDIN));

echo "Digite a primeira nota: ";
$aluno1->nota1 = (float) trim(fgets(STDIN));

echo "Digite a segunda nota: ";
$aluno1->nota2 = (float) trim(fgets(STDIN));

echo "\n===== RESULTADO =====\n";
$aluno1->exibirDados();


