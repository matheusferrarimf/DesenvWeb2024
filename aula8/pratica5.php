<?php

$materias = array("segunda" => "eng soft 2","terça" => "db 2","quarta" => "adm","quinta" => "devweb","sexta"=>"estr dados 2");
$professores = array("segunda" => "Julian","terça" => "Marco","quarta" => "Sandro","quinta" => "Cleber","sexta" => "Fernando");

foreach($materias as $key => $value) {
    echo "dia: ". $key . "<br>" ." matéria: ". $value . "<br>" ."professor: ".$professores[$key]."<br>"."<br>";
    
}
?>