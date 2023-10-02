<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
</head>
<body>
    <h2>Resultado</h2>
    
    <?php
    function converterPara12Horas($hora24) {
        $hora12 = date("g:i A", strtotime($hora24));
        return $hora12;
    }

    if (isset($_POST['hora'])) {
        $hora24 = $_POST['hora'];
        
        // Verificar se a entrada possui um formato de 24 horas válido
        if (preg_match('/^(0[0-9]|1[0-9]|2[0-3]):[0-5][0-9]$/', $hora24)) {
            $hora12 = converterPara12Horas($hora24);
            echo "Hora no formato 12 horas: $hora12";
        } else {
            echo "Por favor, insira uma hora no formato de 24 horas válido (por exemplo, 14:25).";
        }
    } else {
        echo "Por favor, preencha o campo com uma hora no formato de 24 horas.";
    }
    ?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>