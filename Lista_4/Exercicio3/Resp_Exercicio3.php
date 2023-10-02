<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercicio 3</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
</head>
<body>
    <h2>Resultado</h2>
        
        <?php
        if (isset($_POST['numero1']) && isset($_POST['numero2'])) {
            $numero1 = intval($_POST['numero1']);
            $numero2 = intval($_POST['numero2']);
            
            if ($numero1 < $numero2) {
                echo "O menor número é: " . $numero1;
            } elseif ($numero2 < $numero1) {
                echo "O menor número é: " . $numero2;
            } else {
                echo "Os números são iguais.";
            }
        } else {
            echo "Por favor, preencha ambos os campos.";
        }
        ?>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>