<?php
 
$alunos = ["Ana", "joão", "Carlos", "Daniela", "Eduardo"];
 
$nomeProcurado = "joão";
 
if (in_array($nomeProcurado, $alunos)) {

    echo "Aluno encontrado!";

} else {

    echo "Aluno não encontrado.";

}
 
?>
 