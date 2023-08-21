<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo de idade</title>
</head>
<body>
<?php
// Pega o valor digitado pelo usuário
$ano_nascimento = $_POST['ano_nascimento'];

// Cria uma constante com o ano atual
$ano_atual = date('Y');

// Calcula a idade da pessoa em anos
$idade = $ano_atual - $ano_nascimento;

// Calcula quantos dias a pessoa já viveu
$dias_vividos = $idade * 365.25;

// Calcula quantos anos a pessoa terá em 2025
$anos_em_2025 = 2025 - $ano_nascimento;

// Exibe os resultados na tela
echo "A sua idade é de $idade anos. Você já viveu $dias_vividos dias. Em 2025, você terá $anos_em_2025 anos.";
?>

</body>
</html>