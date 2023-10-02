<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercicio 1</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
</head>
<body>
<h2>Resultado</h2>
    
    <?php
    if (isset($_POST['voltas'])) {
        $numVoltas = intval($_POST['voltas']);
        
        $melhorTempo = PHP_INT_MAX;
        $voltaMelhorTempo = 0;
        $tempoTotal = 0;
        
        for ($i = 1; $i <= $numVoltas; $i++) {
            if (isset($_POST["tempo$i"])) {
                $tempo = floatval($_POST["tempo$i"]);
                $tempoTotal += $tempo;
                
                if ($tempo < $melhorTempo) {
                    $melhorTempo = $tempo;
                    $voltaMelhorTempo = $i;
                }
            }
        }
        
        $tempoMedio = $tempoTotal / $numVoltas;
        
        echo "Melhor tempo: $melhorTempo segundos<br>";
        echo "Volta em que o melhor tempo ocorreu: Volta $voltaMelhorTempo<br>";
        echo "Tempo médio das voltas: " . number_format($tempoMedio, 2) . " segundos";
    } else {
        echo "Por favor, preencha o número de voltas.";
    }
    ?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>