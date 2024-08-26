<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Resposta do Exercício 15</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>Exercício 15- Calcular IMC</h1>
    <?php
        if($_SERVER["REQUEST_METHOD"]== 'POST'){
            try{
                $valor1 = (int) $_POST['valor1'] ?? 0;
                $valor2 = (int) $_POST['valor2'] ?? 0; 
                $resultado = round($valor1 / (($valor2 / 100) ** 2),2);
                echo "<p>Resultado: $resultado </p>
                <h5>Interpretação do IMC</h5>
                <p>Menor que 18,50 -> Magraza;</p>
                <p>Entre 18,50 e 24,90 -> Normal;</p>
                <p>Entre 25,00 e 29,90 -> Sobrepeso;</p>
                <p>Entre 30,00 e 39,90 -> Obesidade;</p> 
                <p>Maior que 40,00 -> Obesidade Grave;</p> "; 
            } catch(Exception $e){
                echo "Erro! ".$e->getMessage();
            }
        }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>