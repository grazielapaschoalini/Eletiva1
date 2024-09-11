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
    function strContain(string $palavra1, string $palavra2): bool
    {
      return strpos($palavra1 , $palavra2) !== false;
    }
    
    if ($_SERVER["REQUEST_METHOD"] == 'POST') 
    {
      try
      {
        $palavra1 = (string) $_POST['palavra1'];
        $palavra2 = (string) $_POST['palavra2'];

        if (strContain($palavra1, $palavra2))
        {
          echo "<p>A palavra <strong>" .$palavra2. "</strong> esta contida em <strong>" .$palavra1. "</strong>.";
        }
        else
        {
          echo "<p>A palavra <strong>" .$palavra2. "</strong> não esta contida em <strong>" .$palavra1. "</strong>.";
        }
      }catch (Exception $e)
      {
          echo "Erro:".$e->getMessage();
      }
    }
  ?>
  <div class="row">
    <a href="exer3.php" class="btn btn-primary">Voltar</a>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>