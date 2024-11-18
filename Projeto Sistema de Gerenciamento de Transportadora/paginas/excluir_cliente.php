<?php
    require_once '../funcoes/clientes.php';

    $id = $_GET['id'] ?? null;
    if ($id && excluirCliente((int)$id)) {
        header("Location: clientes.php");
    } else {
        echo "<p class='text-danger'>Erro ao excluir cliente!</p>";
    }
?>