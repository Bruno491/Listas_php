<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio_1</title>
</head>
<body>
<div class="container">
    <h1>Verificar se um número é positivo, negativo ou zero</h1>
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