<?php

declare(strict_types=1);

require_once('../config/bancodedados.php');

function novoMotorista(string $nome, string $cpf, string $email, string $telefone): bool {
    global $pdo;
    $stmt = $pdo->prepare("INSERT INTO motorista (nome, cpf, email, telefone) VALUES (?, ?, ?, ?)");
    return $stmt->execute([$nome, $cpf, $email, $telefone]);
}

function todosMotoristas(): array {
    global $pdo;
    $stmt = $pdo->query("SELECT * FROM motorista");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function retornaMotoristaPorId(int $id): ?array {
    global $pdo;
    $stmt = $pdo->prepare("SELECT * FROM motorista WHERE id = ?");
    $stmt->execute([$id]);
    $motorista = $stmt->fetch(PDO::FETCH_ASSOC);
    return $motorista ?: null;
}

function editarMotorista(int $id, string $nome, string $cpf, string $email, string $telefone): bool {
    global $pdo;
    $stmt = $pdo->prepare("UPDATE motorista SET nome = ?, cpf = ?, email = ?, telefone = ? WHERE id = ?");
    return $stmt->execute([$nome, $cpf, $email, $telefone, $id]);
}

function excluirMotorista(int $id): bool {
    global $pdo;
    $stmt = $pdo->prepare("DELETE FROM motorista WHERE id = ?");
    return $stmt->execute([$id]);
}

?>
