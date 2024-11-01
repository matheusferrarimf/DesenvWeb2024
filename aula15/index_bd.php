<?php
require_once "lib/conexaobd.php";
require_once "lib/querry.php";

$conexaoBd = new ConexaoBd();
$conexaoBd->setHost('127.0.0.1');
$conexaoBd->setPorta(5432);
$conexaoBd->setDataBase("desenvweb");
$conexaoBd->setUserName("postgres");
$conexaoBd->setPassword("postgres");

if(!$conexaoBd-> conectar()){
    echo "falha ao conectar";
} else {
    echo "conectado com sucesso";

    $querry = new Query($conexaoBd);
    if($querry->Open()){
    $querry->setSql("SELECT 1 AS coluna");
        while($linha = $querry->getNextRow()){
                var_dump($linha);
        };
    }
};





?>