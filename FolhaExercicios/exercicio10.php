<!DOCTYPE html>
<html>
<head>
    <title>Árvore Recursiva</title>
</head>
<body>

<?php

$pastas = array(
    "bsn" => array(
        "3a Fase" => array(
            "desenvWeb",
            "bancoDados 1",
            "engSoft 1"
        ),
        "4a Fase" => array(
            "Intro Web",
            "bancoDados 2",
            "engSoft 2"
        )
    )
);


function imprimirArvore($array, $nivel = 0) {
    foreach ($array as $chave => $valor) {
        
        echo str_repeat('-', $nivel) . " ";
        
        if (is_array($valor)) {
            
            if (is_string($chave)) {
                echo $chave . "<br>";
            }
            
            imprimirArvore($valor, $nivel + 1);
        } else {
            
            echo $valor . "<br>";
        }
    }
}


imprimirArvore($pastas);

?>

</body>
</html>
