<?php
include '../database/database.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Receber os dados enviados em JSON
$data = json_decode(file_get_contents('php://input'), true);

// Verifique se os dados obrigatórios estão presentes
if (isset($data['nota'], $data['id_pergunta'], $data['id_setor'], $data['id_dispositivo'])) {
    try {
        // Obter os dados
        $nota = $data['nota'];
        $id_pergunta = $data['id_pergunta'];
        $id_setor = $data['id_setor'];
        $id_dispositivo = $data['id_dispositivo'];
        $feedback = isset($data['feedback']) ? $data['feedback'] : '';

        // Inserir no banco
        $stmt = $conn->prepare("
            INSERT INTO avaliacoes (id_setor, id_pergunta, id_dispositivo, resposta, feedback, data_hora) 
            VALUES (:id_setor, :id_pergunta, :id_dispositivo, :resposta, :feedback, NOW())
        ");
        $stmt->bindParam(':id_setor', $id_setor, PDO::PARAM_INT);
        $stmt->bindParam(':id_pergunta', $id_pergunta, PDO::PARAM_INT);
        $stmt->bindParam(':id_dispositivo', $id_dispositivo, PDO::PARAM_INT);
        $stmt->bindParam(':resposta', $nota, PDO::PARAM_INT);
        $stmt->bindParam(':feedback', $feedback, PDO::PARAM_STR);
        $stmt->execute();

        echo json_encode(["status" => "success", "message" => "Resposta salva com sucesso."]);
    } catch (Exception $e) {
        echo json_encode(["status" => "error", "message" => $e->getMessage()]);
    }
} else {
    echo json_encode(["status" => "error", "message" => "Dados obrigatórios ausentes."]);
}
?>
