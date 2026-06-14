<?php

require_once '../conexao.php';

$id = isset($_GET['id']) ? (int) $_GET['id'] : 0;

if ($id > 0) {
    $sql = "DELETE FROM tarefas WHERE id = :id";

    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT); 

    if ($stmt->execute()) {
        header("Location: read.php?status=deletado");
        exit();
    } else {
        header("Location: read.php?status=erro");
        exit;
    }
} else {
    header("Location: read.php");
    exit;
}
?>