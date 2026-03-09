<?php
$idade = 20;
$temHabilitacao = true;
if ($idade >= 18) {
    if ($temHabilitacao) {
        echo "Pode dirigir.";
    } else {
        echo "Precisa tirar habilitação.";
    }
} else {
    echo "Não pode dirigir.";
}
?>
