<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrada de Valores</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="container">
    <h1>Lista 04</h1>
    <h5>Exercício 01 - Ler uma palavra e exibir a quantidade de caracteres</h5>
    <form action="exer1resp.php" method="post">
        <div class="row">
            <div class="col">
                <label for="palavra" class="form-label">Digite uma palavra: </label>
                <input type="text" class="form-control" name="palavra" id="palavra">
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