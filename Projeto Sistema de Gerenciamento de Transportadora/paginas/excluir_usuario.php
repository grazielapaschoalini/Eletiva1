<?php
    require_once '../funcoes/usuarios.php';

    $id = $_GET['id'] ?? null;
    if ($id && excluirUsuario((int)$id)) {
        header("Location: usuarios.php");
    } else {
        echo "<p class='text-danger'>Erro ao excluir usuário!</p>";
    }
?>