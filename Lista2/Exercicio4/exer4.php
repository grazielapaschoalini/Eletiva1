<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Exercicio 04</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="container">
  <h1>Exercício 04 - Divida 02 Número</h1>
  <form action="exer4resp.php" method="POST">
    <div class="row">
      <div class="col">
        <label for="valor1" class="form-label">Informe o valor 1: </label>
        <input type="number" class="form-control" name="valor1" id="valor1">
      </div>
      <div class="col">
        <label for="valor2" class="form-label">Informe o valor 2: </label>
        <input type="number" class="form-control" name="valor2" id="valor2">
      </div>
    </div>
    <div class="row">
      <div class="col mt-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
      </div>
    </div>
  </form>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>