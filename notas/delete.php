<?php
require_once '../conexao.php';

$id = $_GET['id'];

$sql = "SELECT * FROM notas WHERE id = :id";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':id', $id);
$stmt->execute();

$nota = $stmt->fetch(PDO::FETCH_ASSOC);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $sql = "DELETE FROM notas WHERE id = :id";

    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':id', $id);

    if ($stmt->execute()) {

        header("Location: read.php");
        exit();

    }
}
?>
<form method="POST">
    
    <button type="submit"
        class="bg-red-500 text-white px-6 py-3 rounded">
        Excluir Nota
    </button>

</form>