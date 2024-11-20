<?php
    declare(strict_types=1);
    require_once('../config/bancodedados.php');

    function novaCarga(string $descricao, float $peso, float $valor, string $destino): bool {
        global $pdo;
        $stament = $pdo->prepare("INSERT INTO carga (descricao, peso, valor, destino) VALUES (?, ?, ?, ?)");
        return $stament->execute([$descricao, $peso, $valor, $destino]);
    }

    function todasCargas(): array {
        global $pdo;
        $stament = $pdo->query("SELECT * FROM carga");
        return $stament->fetchAll(PDO::FETCH_ASSOC);
    }

    function retornaCargaPorId(int $id): ?array {
        global $pdo;
        $stament = $pdo->prepare("SELECT * FROM carga WHERE id = ?");
        $stament->execute([$id]);
        $carga = $stament->fetch(PDO::FETCH_ASSOC);
        return $carga ?: null;
    }

    function editarCarga(int $id, string $descricao, float $peso, float $valor, string $destino): bool {
        global $pdo;
        $stament = $pdo->prepare("UPDATE carga SET descricao = ?, peso = ?, valor = ?, destino = ? WHERE id = ?");
        return $stament->execute([$descricao, $peso, $valor, $destino, $id]);
    }

    function excluirCarga(int $id): bool {
        global $pdo;
        $stament = $pdo->prepare("DELETE FROM carga WHERE id = ?");
        return $stament->execute([$id]);
    }
?>
    