<?php

declare(strict_types = 1);

require_once('../config/bancodedados.php');

function novaEntrega(int $cliente_id, int $motorista_id, int $carga_id, string $data_entrega): bool {
    global $pdo;
    $stament = $pdo->prepare("INSERT INTO entregas (cliente_id, motorista_id, carga_id, data_entrega) VALUES (?, ?, ?, ?)");
    return $stament->execute([$cliente_id, $motorista_id, $carga_id, $data_entrega]);
}

function todasEntregas(): array {
    global $pdo;
    $stament = $pdo->query(
        "SELECT e.id, e.data_entrega, 
                c.nome AS cliente, 
                m.nome AS motorista, 
                cg.descricao AS carga 
         FROM entregas e
         JOIN cliente c ON e.cliente_id = c.id
         JOIN motorista m ON e.motorista_id = m.id
         JOIN carga cg ON e.carga_id = cg.id"
    );
    return $stament->fetchAll(PDO::FETCH_ASSOC);
}

function retornaEntregaPorId(int $id): ?array {
    global $pdo;
    $stament = $pdo->prepare(
        "SELECT e.id, e.data_entrega, 
                c.nome AS cliente, 
                m.nome AS motorista, 
                cg.descricao AS carga 
         FROM entregas e
         JOIN cliente c ON e.cliente_id = c.id
         JOIN motorista m ON e.motorista_id = m.id
         JOIN carga cg ON e.carga_id = cg.id
         WHERE e.id = ?"
    );
    $stament->execute([$id]);
    $entrega = $stament->fetch(PDO::FETCH_ASSOC);
    return $entrega ?: null;
}

function excluirEntrega(int $id): bool {
    global $pdo;
    $stament = $pdo->prepare("DELETE FROM entregas WHERE id = ?");
    return $stament->execute([$id]);
}

?>
