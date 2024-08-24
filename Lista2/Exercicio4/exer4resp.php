<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Resposta do Exercício 04</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Exercício 04 - Divida 02 Números</h1>
    <?php
        if($_SERVER["REQUEST_METHOD"]== 'POST'){
            //$valor1 = $_POST['valor1'];
            try{
                $valor1 = (int) $_POST['valor1'] ?? 0; // valor1 é o nome do input colacencianula
                $valor2 = (int) $_POST['valor2'] ?? 0; // valor2 é o nome do input
                // + - * / ++ -- **potenciação
                $resultado = $valor1 / $valor2;
                echo "<p>Resultado da Divisão: $resultado </p>";
            } catch(DivisionByZeroError $e){
                echo "Não é possível realizar uma divisão por zero! ".$e->getMessage();
            }
        }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>