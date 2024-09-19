<?php
$salario1=1000;
$salario2= 2000;
for ($salario1 = 1000; $salario1 < 1100; $salario1++) {
     
    if ($salario1 == 1050) {
        echo "break na iteração de numero 50 <br>";
        break;  
    }  
    
};

if ($salario1 < $salario2) {
    echo $salario1;
};
?>