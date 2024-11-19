<?php
require_once '../funcoes/cargas.php';

$id = $_GET['id'] ?? null;
if ($id && excluirCarga((int)$id)) {
    header("Location: cargas.php");
} else {
    echo "<p class='text-danger'>Erro ao excluir carga!</p>";
}

?>