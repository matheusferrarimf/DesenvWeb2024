<?php
require_once "lib/conexaobd.php";

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
};

?>