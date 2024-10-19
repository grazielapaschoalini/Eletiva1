<?php

declare(strict_types = 1);

require_once('../config/bancodedados.php'); // verificar linha depois ela tem uma pasta config e dentro um arquivo bandodedados.php
function login(string $email, string $senha){
    global $pdo;
    
    //Inserção do usuário ADM
    $stament = 
        $pdo->query("SELECT * FROM usuario WHERE email = 'adm@adm.com'");
    $usuario = $stament->fetchAll(PDO::FETCH_ASSOC);
    //Verifica se usuario existe, senão existe, vmaos criar
    if (!$usuario){
        $pdo->beginTransaction();
        $senha = password_hash('adm', PASSWORD_BCRYPT);
        $stament = 
            $pdo->prepare('INSERT INTO usuario (nome, email, senha, nivel) VALUES (?, ?, ?, ?)');
        $stament->execute(['Administrador', 'adm@adm.com', $senha, 'adm']);
        $pdo->commit();
    }
    
    //Verificar email e senha do usuário
    $stament = 
        $pdo->prepare("SELECT * FROM usuario WHERE email = ?");
    //validar os valores com EXPRESSÕES REGULARES - Validar se é um e-mail
    $stament->execute([$email]);
    $usuario = $stament->fetch(PDO::FETCH_ASSOC);
    if($usuario && password_verify($senha, $usuario['senha'])){
        return $usuario;
    }else{
        return null;
    }

}   


?>