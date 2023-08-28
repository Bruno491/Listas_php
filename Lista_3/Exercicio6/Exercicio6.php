<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Exercicio 6</title>
</head>

<body>
    <form action="Exercicio6_Resp.php" method="post">
        <?php
        for ($i = 1; $i <= 5; $i++) {
            echo '<input type="text" name="nome' . $i . '" placeholder="Digite o nome do produto ' . $i . '"> <br>';
            echo '<input type="number" name="preco' . $i . '" placeholder="Digite o preço do produto ' . $i . '"> <br> <br>';
        }
        ?>
        <input type="submit" value="Calcular">
    </form>
</body>

</html>