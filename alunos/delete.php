<?php
require_once '../auth.php'; 
require_once '../conexao.php';

$id = $_GET['id'] ?? 0;

if ($id) {

    $sql = "DELETE FROM alunos WHERE id = :id";

    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(':id', $id);

    if ($stmt->execute()) {
        header("Location: read.php?status=deletado");
        exit();
    } else {
        echo "Erro ao excluir aluno.";
    }

} else {
    echo "ID inválido.";
}
?>