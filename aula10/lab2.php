<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Armazena os dados do usuário na sessão
    $_SESSION["username"] = $_POST["username"];
    $_SESSION["password"] = $_POST["password"];
    $_SESSION["start_time"] = date("Y-m-d H:i:s");
    $_SESSION["last_request"] = $_SESSION["start_time"];

    // Cria cookies para usuário e data/hora de início (válidos por 5 minutos)
    setcookie("username", $_POST["username"], time() + (60 * 5), "/");
    setcookie("start_time", $_SESSION["start_time"], time() + (60 * 5), "/");

    // Redireciona para a página de informações da sessão
    header("Location: session_info.php");
    exit();
}
?>
