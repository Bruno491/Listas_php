<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercicio 5</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
</head>
<body>
    <h2>Calculadora de IMC</h2>
        <form action="Resp_Exercicio5.php" method="post">
            <label for="altura">Altura (em metros):</label>
            <input type="text" id="altura" name="altura" required><br><br>
            
            <label for="peso">Peso (em quilogramas):</label>
            <input type="text" id="peso" name="peso" required><br><br>
            
            <input type="submit" value="Calcular IMC">
        </form>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>