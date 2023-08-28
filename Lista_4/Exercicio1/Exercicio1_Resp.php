<!DOCTYPE html>
<html>
<head>
    <title>Resultado</title>
</head>
<body>
    <h1>Resultado</h1>
    <?php
    function validarData($data) {
        $formato = 'd-m-Y';
        $d = DateTime::createFromFormat($formato, $data);
        return $d && $d->format($formato) === $data;
    }

    function obterDiaDaSemana($data) {
        $diasDaSemana = array("Domingo", "Segunda-feira", "Terça-feira", "Quarta-feira", "Quinta-feira", "Sexta-feira", "Sábado");
        $timestamp = strtotime($data);
        $indiceDia = date("w", $timestamp); // 0 (domingo) até 6 (sábado)
        return $diasDaSemana[$indiceDia];
    }

    $data = $_POST['data'];

    if (validarData($data)) {
        $diaDaSemana = obterDiaDaSemana($data);
        echo "A data $data é válida e corresponde a um(a) $diaDaSemana.";
    } else {
        echo "A data $data não é válida.";
    }
    ?>
</body>
</html>
