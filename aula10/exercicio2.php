<?php
session_start();

// Verifica se os cookies existem
if (!isset($_COOKIE["username"]) || !isset($_COOKIE["start_time"])) {
    echo "Os dados da sessão foram perdidos.";
    exit();
}

// Atualiza a hora da última requisição
$_SESSION["last_request"] = date("Y-m-d H:i:s");

// Calcula o tempo de sessão
$session_start = strtotime($_COOKIE["start_time"]);
$current_time = strtotime($_SESSION["last_request"]);
$session_duration = $current_time - $session_start;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informações da Sessão (Cookies)</title>
</head>
<body>
    <h2>Informações da Sessão (Cookies)</h2>
    <p>Login: <?php echo $_COOKIE["username"]; ?></p>
    <p>Data/Hora de Início da Sessão: <?php echo $_COOKIE["start_time"]; ?></p>
    <p>Data/Hora da Última Requisição: <?php echo $_SESSION["last_request"]; ?></p>
    <p>Tempo de Sessão: <?php echo $session_duration; ?> segundos</p>
</body>
</html>
