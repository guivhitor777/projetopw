<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once '../conexao.php';

if (!isset($_GET['id']) || empty($_GET['id'])) {
    die("ID não informado.");
}
$id = (int) $_GET['id'];

$sql = "SELECT * FROM notas WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':id', $id, PDO::PARAM_INT);
$stmt->execute();
$nota = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$nota) {
    die("Nota não encontrada.");
}

$sql = "DELETE FROM notas WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':id', $id, PDO::PARAM_INT);

if ($stmt->execute()) {
    header("Location: read.php?status=deletado");
    exit();
} else {
    echo "Erro ao tentar deletar a nota.";
}
?>