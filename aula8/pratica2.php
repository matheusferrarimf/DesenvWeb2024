<?php
$salario1 = 1000;
$salario2 = 2000;
$salario2 = $salario1;
++$salario2;
$salario1 = $salario1 * 1.1;
echo"Valor Salario 1: ". $salario1 ." valor do salario 2: ". $salario2 ;
?>