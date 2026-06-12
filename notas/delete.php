<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

// Certifique-se de que o caminho da conexão está correto para esta pasta
require_once '../conexao.php';

if (!isset($_GET['id']) || empty($_GET['id'])) {
    die("ID não informado.");
}

// Forçamos o ID a ser um número inteiro por segurança
$id = (int) $_GET['id'];

// 1. Verificamos se a nota realmente existe no banco (opcional, mas bom)
$sql = "SELECT * FROM notas WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':id', $id, PDO::PARAM_INT);
$stmt->execute();
$nota = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$nota) {
    die("Nota não encontrada.");
}

// 2. Executa a exclusão direto (removido o IF do POST)
$sql = "DELETE FROM notas WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':id', $id, PDO::PARAM_INT);

if ($stmt->execute()) {
    // IMPORTANTE: Removi o echo "Vou redirecionar...". 
    // Se você der echo ANTES do header(), o redirecionamento falha e dá erro!
    header("Location: read.php?status=deletado");
    exit();
} else {
    echo "Erro ao tentar deletar a nota.";
}
?>