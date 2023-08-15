<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css"  href="Exercicio_1.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
</head>
<body>
    <h1>
        <?php
        $menor_valor = $_POST["valor1"];
        $posicao = 1;
        for($i=2;$i<=7;$i++){
            if ($menor_valor> $_POST["valor$i"]){
                $menor_valor = $_POST["valor$i"];
                $posicao = $i;
            }
        }
        echo "O menor valor informado é $menor_valor ma $posicao º posição"
        ?>
    </h1>
</body>
</html>