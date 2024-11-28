<?php
include '../database/database.php';

try {
    $stmt = $conn->prepare("SELECT id_pergunta, texto_pergunta FROM perguntas WHERE status = TRUE ORDER BY id_pergunta");
    $stmt->execute();
    $perguntas = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($perguntas);
} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}
?>
