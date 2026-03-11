<?php
echo "Digite sua idade: ";
$idade = fgets(STDIN);

if ($idade < 0){
    echo "Idade não permitida";
}
elseif ($idade <= 12) {
    echo "Classificação infantil";
}
elseif ($idade <= 17) {
    echo "Classificação: Adolescente";
}
elseif ($idade <= 59) {
    echo "Classificação: Adulto";
}
else {
    echo "Classificação: Idoso";
}
?>