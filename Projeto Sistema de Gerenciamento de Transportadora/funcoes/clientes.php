<?php

declare(strict_types=1);

require_once('../config/bancodedados.php');

function novoCliente(string $nome, string $cpf, string $email, string $telefone): bool {
    global $pdo;
    $stament = $pdo->prepare("INSERT INTO cliente (nome, cpf, email, telefone) VALUES (?, ?, ?, ?)");
    return $stament->execute([$nome, $cpf, $email, $telefone]);
}

function todosClientes(): array {
    global $pdo;
    $stament = $pdo->query("SELECT * FROM cliente");
    return $stament->fetchAll(PDO::FETCH_ASSOC);
}

function retornaClientePorId(int $id): ?array {
    global $pdo;
    $stament = $pdo->prepare("SELECT * FROM cliente WHERE id = ?");
    $stament->execute([$id]);
    $cliente = $stament->fetch(PDO::FETCH_ASSOC);
    return $cliente ?: null;
}

function atualizarCliente(int $id, string $nome, string $cpf, string $email, string $telefone): bool {
    global $pdo;
    $stament = $pdo->prepare("UPDATE cliente SET nome = ?, cpf = ?, email = ?, telefone = ? WHERE id = ?");
    return $stament->execute([$nome, $cpf, $email, $telefone, $id]);
}

function editarCliente(int $id, string $nome, string $cpf, string $email, string $telefone): bool {
    global $pdo;
    $stament = $pdo->prepare("UPDATE cliente SET nome = ?, cpf = ?, email = ?, telefone = ? WHERE id = ?");
    return $stament->execute([$nome, $cpf, $email, $telefone, $id]);
}

function excluirCliente(int $id): bool {
    global $pdo;
    $stament = $pdo->prepare("DELETE FROM cliente WHERE id = ?");
    return $stament->execute([$id]);
}
?>
