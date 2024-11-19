<?php
require_once '../funcoes/motoristas.php';

$id = $_GET['id'] ?? null;
if ($id && excluirMotorista((int)$id)) {
    header("Location: motoristas.php");
} else {
    echo "<p class='text-danger'>Erro ao excluir motorista!</p>";
}

?>

