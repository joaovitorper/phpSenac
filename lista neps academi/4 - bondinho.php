<?php
 
$A;
$M;
 
echo "Digite a quantidade de alunos: ";
$A = fgets(STDIN);
 
echo "Digite a quantidade de monitores: ";
$M = fgets(STDIN);
 
$total = $A + $M ;

if($total<50){
    echo "S";
   } else {
    echo "N";
} 
?>
 