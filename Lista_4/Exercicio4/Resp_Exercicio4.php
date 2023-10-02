<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercicio 4</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
</head>
<body>
    <h2>Resultado</h2>
        
        <?php
        function calcularSomaDivisores($numero) {
            $soma = 0;
            for ($i = 1; $i < $numero; $i++) {
                if ($numero % $i == 0) {
                    $soma += $i;
                }
            }
            return $soma;
        }

        if (
            isset($_POST['numero1']) &&
            isset($_POST['numero2']) &&
            isset($_POST['numero3']) &&
            isset($_POST['numero4']) &&
            isset($_POST['numero5'])
        ) {
            $numeros = [
                intval($_POST['numero1']),
                intval($_POST['numero2']),
                intval($_POST['numero3']),
                intval($_POST['numero4']),
                intval($_POST['numero5'])
            ];

            foreach ($numeros as $numero) {
                $somaDivisores = calcularSomaDivisores($numero);
                echo "Divisores de $numero: $somaDivisores<br>";
            }
        } else {
            echo "Por favor, preencha todos os campos com números inteiros positivos.";
        }
        ?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>