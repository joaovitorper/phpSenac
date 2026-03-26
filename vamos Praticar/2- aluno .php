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

$estudantes = [];

while(true){
    echo"\n";
    echo "1 ADICIONAR estudantes".PHP_EOL;
    echo "2 LISTAR estudantes".PHP_EOL;
    echo "3 Programa encerrado".PHP_EOL;

       echo "\n";
       echo "Digite uma opção: ";
       $opcao = trim(fgets(STDIN));
       echo "Você digitou: $opcao\n";
    switch ($opcao) {
        case '1':
            $aluno1 = new aluno();
            echo "Digite o nome do Aluno:  ".PHP_EOL;
            $aluno1 -> nome =  trim(fgets(STDIN));
            
            echo "Digite a Primeira NOTA:  ".PHP_EOL;
            $aluno1 -> nota1 =  trim(fgets(STDIN));
            
            echo "Digite a Segunda NOTA:  " .PHP_EOL;
            $aluno1 -> nota2 =  trim(fgets(STDIN)); 
            
            $estudantes[] =$aluno1;
              echo "Aluno Cadastrado com sucesso";          
         

            break;
            case 2:
            if (count($estudantes) == 0) {
                echo "Nenhum aluno cadastrado.\n";
            } else {
                echo "\n=== LISTA DE ALUNOS ===\n";
 
                foreach ($estudantes as $a) {
                    $a->exibirDados();
                }
            }
              break;

               
                
        default:
      case 3:
    echo "Encerrando o sistema...\n";
    exit;

       } 
    }
