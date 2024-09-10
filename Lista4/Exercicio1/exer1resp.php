<?php
    declare(strict_types=1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <main class="conteiner">
    <?php
        function calcularCaracteres(string $palavra): int
        {
            return strlen($palavra);
        }
        if ($_SERVER['REQUEST_METHOD'] == "POST")
        {
            try{
                $palavra = (string) $_POST['palavra'];
                echo "<p>A palavra tem ".calcularCaracteres ($palavra). " caractere(s)!</p>";
            }catch (Exception $e)
            {
                echo "Erro:".$e->getMessage();
            }
        }
    ?>
    </main>
    <a href="exer1.php" class="btn btn-primary">Voltar</a>
</body>
</html>