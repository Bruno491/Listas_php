<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Ler 7 números diferentes e imprimir o menor valor e a posição do menor valor na sequência de entrada</title>
  <link rel="stylesheet" type="text/css"  href="Exercicio_1.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
</head>
<body>
  <div class="container">
    <h1>Ler 7 números diferentes e imprimir o menor valor e a posição do menor valor na sequência de entrada</h1>
    <form action="Exercicio_2.php" method="post">
      <input type="number" name="number1" placeholder="Digite o primeiro número">
      <input type="number" name="number2" placeholder="Digite o segundo número">
      <input type="number" name="number3" placeholder="Digite o terceiro número">
      <input type="number" name="number4" placeholder="Digite o quarto número">
      <input type="number" name="number5" placeholder="Digite o quinto número">
      <input type="number" name="number6" placeholder="Digite o sexto número">
      <input type="number" name="number7" placeholder="Digite o sétimo número">
      <input type="submit" value="Enviar">
    </form>
    <?php
    if (isset($_POST['number1']) && isset($_POST['number2']) && isset($_POST['number3']) && isset($_POST['number4']) && isset($_POST['number5']) && isset($_POST['number6']) && isset($_POST['number7'])) {
      $number1 = $_POST['number1'];
      $number2 = $_POST['number2'];
      $number3 = $_POST['number3'];
      $number4 = $_POST['number4'];
      $number5 = $_POST['number5'];
      $number6 = $_POST['number6'];
      $number7 = $_POST['number7'];
    
      $array = array($number1, $number2, $number3, $number4, $number5, $number6, $number7);
    
      $menor_valor = min($array);
      $posicao_menor_valor = array_search($menor_valor, $array);
    
      echo "O menor valor é $menor_valor e está na posição $posicao_menor_valor";
    }
    ?>
  </div>
</body>
</html>
