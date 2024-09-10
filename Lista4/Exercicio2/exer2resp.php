<?php
    declare(strict_types=1);
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Resultado</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="container">
  <h1>Resultado</h1>
  <?php
    function calcularMinuscula(string $palavra): string
    {
      return strtolower($palavra);
    }
    function calcularMaiuscula(string $palavra): string
    {
      return strtoupper($palavra);
    }
    if ($_SERVER["REQUEST_METHOD"] == 'POST') 
    {
      try
      {
        $palavra = (string) $_POST['palavra'];
        echo "<p> A palavra em Minúsculo fica assim: ".calcularMinuscula ($palavra). "!</p>";
        echo "<p> E a palavra em Maiúsculo fica assim: ".calcularMaiuscula ($palavra). "!</p>";
      }catch (Exception $e)
      {
          echo "Erro:".$e->getMessage();
      }
    }
  ?>
  <a href="exer2.php" class="btn btn-primary">Voltar</a>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>