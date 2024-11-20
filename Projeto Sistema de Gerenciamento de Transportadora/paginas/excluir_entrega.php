<?php
require_once('../funcoes/entregas.php');

$id = $_GET['id'] ?? null;
if ($id && excluirEntrega((int)$id)) {
    header("Location: entregas.php");
} else {
    echo "<p class='text-danger'>Erro ao excluir entrega!</p>";
}

?>

