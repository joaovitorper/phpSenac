<?php
class Aluno {
    public $nome;
    public $nota;

    public function __construct($nome, $nota) {
        $this->nome = $nome;
        $this->nota = $nota;
    }
}


$alunos = [];


$alunos[] = new Aluno("João", 8.5);
$alunos[] = new Aluno("Maria", 7.0);
$alunos[] = new Aluno("Carlos", 9.2);


foreach ($alunos as $aluno) {
    echo "Nome: " . $aluno->nome . "\n";
    echo "Nota: " . $aluno->nota . "\n";
    echo "----------------\n";
}
?>