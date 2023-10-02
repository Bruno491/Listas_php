<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercicio 2</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
</head>
<body>
    <h2>Resultado</h2>
    
    <?php
    if (isset($_POST['soma_lote']) && isset($_POST['num_cheques'])) {
        $somaLoteInformada = floatval($_POST['soma_lote']);
        $numCheques = intval($_POST['num_cheques']);
        
        $somaCheques = 0;
        
        for ($i = 1; $i <= $numCheques; $i++) {
            if (isset($_POST["cheque$i"])) {
                $valorCheque = floatval($_POST["cheque$i"]);
                $somaCheques += $valorCheque;
            }
        }
        
        if ($somaLoteInformada == $somaCheques) {
            echo "LOTE Ok";
        } elseif ($somaLoteInformada < $somaCheques) {
            echo "Diferença negativa";
        } else {
            echo "Diferença positiva";
        }
    } else {
        echo "Por favor, preencha todos os campos corretamente.";
    }
    ?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>