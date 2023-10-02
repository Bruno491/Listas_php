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
    <h2>Validador de Lote de Cheques</h2>
    <form action="Resp_Exercicio2.php" method="post">
        <label for="soma_lote">Soma do Lote:</label>
        <input type="text" id="soma_lote" name="soma_lote" required><br><br>
        
        <label for="num_cheques">Número de Cheques:</label>
        <input type="text" id="num_cheques" name="num_cheques" required><br><br>

        <h3>Informe os valores dos cheques:</h3>
        <div id="cheques-inputs">
            <!-- Campos de entrada para os valores dos cheques serão adicionados aqui -->
        </div>
        
        <input type="submit" value="Validar Lote">
    </form>

    <script>
        // Função para adicionar campos de entrada para os valores dos cheques
        function adicionarCamposDeCheques(numCheques) {
            var chequesInputs = document.getElementById("cheques-inputs");
            chequesInputs.innerHTML = ""; // Limpar qualquer conteúdo anterior
            
            for (var i = 1; i <= numCheques; i++) {
                var label = document.createElement("label");
                label.setAttribute("for", "cheque" + i);
                label.textContent = "Valor do Cheque " + i + ":";
                
                var input = document.createElement("input");
                input.setAttribute("type", "text");
                input.setAttribute("id", "cheque" + i);
                input.setAttribute("name", "cheque" + i);
                input.setAttribute("required", true);
                
                chequesInputs.appendChild(label);
                chequesInputs.appendChild(input);
                chequesInputs.appendChild(document.createElement("br"));
            }
        }

        // Adicionar campos de entrada quando o número de cheques for informado
        document.getElementById("num_cheques").addEventListener("input", function() {
            var numCheques = parseInt(this.value) || 0;
            adicionarCamposDeCheques(numCheques);
        });
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>