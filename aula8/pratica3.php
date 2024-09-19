<?php
$salario1 = 1000;
$salario2 = 2000;
$salario2 = $salario1;
++$salario2;
$salario1 = $salario1 * 1.1;
if ($salario1 > $salario2) {
    echo"Valor do salario é maior q o salario 2";
} 
elseif ($salario1 < $salario2) {
    echo "salario 1 é menor que o salario 2";
} 
else{
    echo "os valores são iguais";
}

?>