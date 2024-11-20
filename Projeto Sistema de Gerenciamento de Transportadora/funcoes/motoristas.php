<?php
    declare(strict_types=1);
    require_once('../config/bancodedados.php');

    function gerarDadosGrafico(): array {
        global $pdo;

        // Consulta para contar as entregas realizadas por motorista no mês atual
        $stmt = $pdo->query("SELECT 
                                m.nome,
                                COUNT(e.id) AS total_entregas
                            FROM entregas e
                            INNER JOIN motorista m ON e.motorista_id = m.id
                            WHERE MONTH(e.data_entrega) = MONTH(CURRENT_DATE())
                            AND YEAR(e.data_entrega) = YEAR(CURRENT_DATE())
                            GROUP BY m.id");

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

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
