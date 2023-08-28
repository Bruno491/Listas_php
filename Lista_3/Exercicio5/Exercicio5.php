<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Exercicio 5</title>
</head>

<body>
    <form action="Exercicio5_Resp.php" method="post">
        <?php
        for ($i = 1; $i <= 20; $i++) {
            echo '<input type="number" name="numero' . $i . '" placeholder="Digite um número"> <br>';
        }
        ?>
        <input type="submit" value="Calcular">
    </form>
</body>

</html>