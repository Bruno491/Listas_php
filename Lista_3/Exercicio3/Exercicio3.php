<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Exercicio 3</title>
</head>
<body>
  <form action="Exercicio3_Resp.php" method="post">
  <?php
    for ($i = 1; $i <= 10; $i++) {
      echo '<input type="number" name="numero' . $i . '" placeholder="Digite um número"> <br>';
    }
  ?>
    <input type="number" name="numero_a_multiplicar" placeholder="Digite um número">
    <input type="submit" value="Calcular">
  </form>
</body>
</html>
