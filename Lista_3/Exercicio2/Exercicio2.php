<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Exercicio 2</title>
</head>
<body>
  <form action="Exercicio2_Resp.php" method="post">
  <?php
    for ($i = 1; $i <= 10; $i++) {
      echo '<input type="number" name="numero' . $i . '" placeholder="Digite um número"> <br>';
    }
  ?>
    <input type="submit" value="Calcular">
  </form>
</body>
</html>
