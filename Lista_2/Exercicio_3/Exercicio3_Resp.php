<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Soma de dois valores</title>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <link href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" rel="stylesheet">
    </head>

    <body>
        <?php
            if (isset($_POST['numero1']) && isset($_POST['numero2'])) {
                $numero1 = $_POST['numero1'];
                $numero2 = $_POST['numero2'];
                $soma = $numero1 + $numero2;
                if ($numero1 == $numero2) {
                $resultado = $soma * 3;
                } else {
                $resultado = $soma;
                }
                echo "A soma dos dois números é $resultado";
            }
        ?>
    </body>

</html>