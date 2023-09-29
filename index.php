<?php
$num1 = 1.5;
$num2 = 5;
$num3 = "text";

if (is_numeric($num1)) {

    $result = $num1 * $num2;
    if ($result > 100) {
    
        echo "È maior que 100.";
    } else {
        echo "($result)Não é maior que 100.";
    }
} else {
    echo "($result)A variável não é um número.";
}
?>