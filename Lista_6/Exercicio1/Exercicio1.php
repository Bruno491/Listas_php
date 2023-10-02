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
<h2>Calculadora de Tempos de Voltas</h2>
    <form action="Resp_Exercicio1.php" method="post">
        <label for="voltas">Número de voltas:</label>
        <input type="text" id="voltas" name="voltas" required><br><br>

        <div id="tempos-inputs">
            <!-- Campos de entrada para tempos das voltas serão adicionados aqui -->
        </div>
        
        <input type="submit" value="Calcular">
    </form>

    <script>
        // Função para adicionar campos de entrada de tempos com base no número de voltas
        function adicionarCamposDeTempos(numVoltas) {
            var temposInputs = document.getElementById("tempos-inputs");
            temposInputs.innerHTML = ""; // Limpar qualquer conteúdo anterior
            
            for (var i = 1; i <= numVoltas; i++) {
                var label = document.createElement("label");
                label.setAttribute("for", "tempo" + i);
                label.textContent = "Volta " + i + ":";
                
                var input = document.createElement("input");
                input.setAttribute("type", "text");
                input.setAttribute("id", "tempo" + i);
                input.setAttribute("name", "tempo" + i);
                input.setAttribute("required", true);
                
                temposInputs.appendChild(label);
                temposInputs.appendChild(input);
                temposInputs.appendChild(document.createElement("br"));
            }
        }

        // Adicionar campos de entrada quando o número de voltas for informado
        document.getElementById("voltas").addEventListener("input", function() {
            var numVoltas = parseInt(this.value) || 0;
            adicionarCamposDeTempos(numVoltas);
        });
    </script>
    </form>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>