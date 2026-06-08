<?php
// Inicia a sessão para ter acesso a ela
session_start();

// Limpa todas as variáveis salvas na sessão (id, nome, tipo, etc.)
$_SESSION = array();

// Destrói a sessão completamente no servidor
session_destroy();

// Redireciona o usuário de volta para a tela de login
header("Location: index.php");
exit();
?>