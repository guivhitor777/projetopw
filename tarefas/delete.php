<?php

require_once '../conexao.php';

// Pegamos o ID e garantimos que ele seja um número inteiro (int)
$id = isset($_GET['id']) ? (int) $_GET['id'] : 0;

// Só executa o DELETE se o ID for válido (maior que zero)
if ($id > 0) {
    $sql = "DELETE FROM tarefas WHERE id = :id";

    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT); // Informamos que o parâmetro é um número inteiro

    if ($stmt->execute()) {
        header("Location: read.php?status=sucesso");
        exit;
    } else {
        // Opcional: tratar caso a execução falhe por erro no banco
        header("Location: read.php?status=erro");
        exit;
    }
} else {
    // Se o ID for inválido ou zero, apenas manda de volta para a listagem
    header("Location: read.php");
    exit;
}
?>
