<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercicio 6</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
</head>
<body>
    <h2>Resultado</h2>
        
        <?php
        function ehNumeroPerfeito($numero) {
            $somaFatores = 0;
            for ($i = 1; $i < $numero; $i++) {
                if ($numero % $i == 0) {
                    $somaFatores += $i;
                }
            }
            return $somaFatores == $numero;
        }

        if (isset($_POST['numero'])) {
            $numero = intval($_POST['numero']);
            
            if ($numero > 0) {
                if (ehNumeroPerfeito($numero)) {
                    echo "$numero é um número perfeito.";
                } else {
                    echo "$numero não é um número perfeito.";
                }
            } else {
                echo "Por favor, insira um número positivo válido.";
            }
        } else {
            echo "Por favor, preencha o campo com um número.";
        }
        ?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>