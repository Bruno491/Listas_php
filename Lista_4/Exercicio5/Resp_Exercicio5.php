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
    <h2>Resultado</h2>
        
        <?php
        if (isset($_POST['altura']) && isset($_POST['peso'])) {
            $altura = floatval($_POST['altura']);
            $peso = floatval($_POST['peso']);
            
            if ($altura > 0 && $peso > 0) {
                $imc = $peso / ($altura * $altura);
                
                echo "Seu IMC é: " . number_format($imc, 2) . "<br>";
                
                if ($imc < 18.5) {
                    echo "Classificação: Abaixo do peso";
                } elseif ($imc >= 18.5 && $imc < 24.9) {
                    echo "Classificação: Peso normal";
                } elseif ($imc >= 25 && $imc < 29.9) {
                    echo "Classificação: Sobrepeso";
                } elseif ($imc >= 30 && $imc < 34.9) {
                    echo "Classificação: Obesidade grau I";
                } elseif ($imc >= 35 && $imc < 39.9) {
                    echo "Classificação: Obesidade grau II";
                } else {
                    echo "Classificação: Obesidade grau III";
                }
            } else {
                echo "Por favor, insira valores válidos para altura e peso.";
            }
        } else {
            echo "Por favor, preencha todos os campos.";
        }
        ?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>