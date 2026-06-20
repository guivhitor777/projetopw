<?php
session_start();

header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Pragma: no-cache");

if (!isset($_SESSION['usuario_id']) || $_SESSION['usuario_tipo'] !== 'adm') {
    header('Location: /login.php'); 
    exit();
}
?>