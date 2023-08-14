<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Verificar se um número é positivo, negativo ou zero</title>
  <link rel="stylesheet" type="text/css"  href="Exercicio_1.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
</head>
<body>
  <div class="container">
    <h1>Verificar se um número é positivo, negativo ou zero</h1>
    <form action="Exercicio_1.php" method="post">
      <input type="number" name="number" placeholder="Digite um número">
      <input type="submit" value="Verificar">
    </form>
    <?php
    if (isset($_POST['number'])) {
      $number = $_POST['number'];
      if ($number > 0) {
        echo "Valor Positivo";
      } elseif ($number < 0) {
        echo "Valor Negativo";
      } else {
        echo "Igual a Zero";
      }
    }
    ?>
  </div>
</body>
</html>
