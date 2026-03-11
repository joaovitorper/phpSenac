<?php
$nota;
$frequencia;

echo "Digite a sua Nota: ";
$nota = fgets(STDIN);

echo "Digite a frequencia do aluno: ";
$frequencia = fgets(STDIN);

if ($nota >= 7 && $frequencia >= 75){
    echo "Você foi aprovado";
} 
elseif ($nota >= 5 && $frequencia >= 75){
    echo "Você está de recuperação";
} 
else {
    echo "Reprovado";
}
