<?php

declare(strict_types=1);

require_once('../config/bancodedados.php');

#function gerarDadosGrafico(): array {
#    global $pdo;
#    $stament = $pdo->query("SELECT m.id, m.nome, SUM(e.quantidade) as entregas FROM entregas e INNER JOIN motorista m ON m.id = e.motorista_id GROUP BY m.id");
#    return $stament->fetchAll(PDO::FETCH_ASSOC);
#}

function novoMotorista(string $nome, string $cnh, string $telefone): bool {
    global $pdo;
    $stament = $pdo->prepare("INSERT INTO motorista (nome, cnh, telefone) VALUES (?, ?, ?)");
    return $stament->execute([$nome, $cnh, $telefone]);
}

function todosMotoristas(): array {
    global $pdo;
    $stament = $pdo->query("SELECT * FROM motorista");
    return $stament->fetchAll(PDO::FETCH_ASSOC);
}

function retornaMotoristaPorId(int $id): ?array {
    global $pdo;
    $stament = $pdo->prepare("SELECT * FROM motorista WHERE id = ?");
    $stament->execute([$id]);
    $motorista = $stament->fetch(PDO::FETCH_ASSOC);
    return $motorista ?: null;
}

function editarMotorista(int $id, string $nome, string $cnh, string $telefone): bool {
    global $pdo;
    $stament = $pdo->prepare("UPDATE motorista SET nome = ?, cnh = ?, telefone = ? WHERE id = ?");
    return $stament->execute([$nome, $cnh, $telefone, $id]);
}

function excluirMotorista(int $id): bool {
    global $pdo;
    $stament = $pdo->prepare("DELETE FROM motorista WHERE id = ?");
    return $stament->execute([$id]);
}

?>
