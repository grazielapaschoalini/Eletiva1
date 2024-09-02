<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Resultado</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
  <h1>Resultado</h1>
  <?php
  if ($_SERVER["REQUEST_METHOD"] == 'POST') 
  {
    try 
    {
      $numero = (int)$_POST["numero"] ?? 0;

      if ($numero >= 0)
      {
        $fatorial = 1;
        for($i = 1; $i <= $numero; $i++)
        {
          $fatorial *= $i;
        }
        echo "<p> O fatorial de $numero é: $fatorial</p>";
      }
      else
      {
        echo "<p>Por favor, informe um número positivo.</p>";
      }
    } catch (Exception $e) 
    {
      echo "Erro! ".$e->getMessage();
    }
  }
  ?>
  <a href="exer9.php" class="btn btn-primary">Voltar</a>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>