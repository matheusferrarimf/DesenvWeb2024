<?php

try {
    $dbconn = pg_connect("host=localhost
                          port=5432 
                          dbname=desenvweb 
                          user=postgres 
                          password = postgres");
    if ($dbconn) {
        echo "database conectado...";

        $termoBusca = $_POST["campo_primeiro_nome"];

        $result = pg_query($dbconn,"SELECT * FROM TBPESSOA WHERE PESNOME ILIKE '%$termoBusca%'");

        $row = pg_fetch_array($result);
        if (!$row){
            echo "Nada Encontrado";
        }
        while ($row = pg_fetch_array($result)) {
            echo print_r($row). "<br>";
        }
    }
} catch (Exception $e) {
    echo $e->getMessage();
}

?>