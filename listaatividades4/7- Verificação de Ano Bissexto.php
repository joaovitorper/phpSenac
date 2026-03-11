<?php
echo "Digite um ano: ";
$ano = fgets(STDIN);

if (($ano % 4 == 0 && $ano % 100 != 0) || ($ano % 400 == 0)) {
    echo "Ano bissexto\n";
} else {
    echo "Ano não é bissexto\n";
}
?>